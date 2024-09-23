<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscription;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Newsletters\NewsletterSubscribedNotice;
use App\Notifications\Newsletters\NewsletterAutoResponder;
use App\Notifications\Newsletters\NewsletterUnSubscribeNotice;
use App\Notifications\Newsletters\NewsletterUnsubscribedAutoResponder;
use App\Notifications\Newsletters\NewsletterUnsubscribeRequestAutoResponder;

class NewsletterSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $previous_url = route('landingpage');
        $previous_url .= '?#newsletter_section';
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'fullname' => 'required|string',
        ]);
        if ($validator->fails()) {
            flash()->addError('Oops! Try again...');
            return redirect($previous_url)
                ->withErrors($validator)
                ->withInput($request->all());
        }

        $subscribed = NewsletterSubscription::create([
            'email' => $request['email'],
            'fullname' => $request['fullname'],
        ]);

        if ($subscribed) {
            flash('Subscription Successful. Check your mail for further instructions');
            // notify client
            Notification::route('mail', $request->email)
                ->notify(new NewsletterAutoResponder($validator->validated()));

            // notify admin
            Notification::route('mail', config('app.dev_email'))
                ->notify(new NewsletterSubscribedNotice($validator->validated()));
        }

        // return back()->;
        return redirect($previous_url);
    }


    public function requestToUnsubscribe(Request $request, string $email)
    {
        $user = NewsletterSubscription::where('email', $email)->first();

        if ($user) {
            // flash('Subscription Successful. Check your mail for further instructions');
            // notify client
            Notification::route('mail', $request->email)
                ->notify(new NewsletterUnsubscribeRequestAutoResponder($user->toArray()));

            // notify admin
            Notification::route('mail', config('app.dev_email'))
                ->notify(new NewsletterUnSubscribeNotice($user->toArray()));
        }

        // return back()->
        return redirect(url()->previous());
    }



    public function destroy(Request $request, string $email)
    {
        $user = NewsletterSubscription::where('email', $email)->first();

        $unsubscribe = $user->delete();

        $unsubscribe ?
            // notify client
            Notification::route('mail', $request->email)
                ->notify(new NewsletterUnsubscribedAutoResponder($user->toArray()))
            :    // notify admin
            Notification::route('mail', config('app.dev_email'))
                ->notify(new NewsletterSubscribedNotice($user->toArray()));

        return redirect(url()->previous());

    }

    /**
     * Display the specified resource.
     */
    public function show(NewsletterSubscription $newsletterSubscription)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsletterSubscription $newsletterSubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsletterSubscription $newsletterSubscription)
    {
        //
    }

}
