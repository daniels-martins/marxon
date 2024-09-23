<?php

use App\Models\Service;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterSubscriptionController;


Route::get('/', function () {
   $services = Service::all();
    return view('frontend.index_spa', compact('services'));
})->name('landingpage');


// share the same layout file
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');


Route::get('/portfolio', function () {
    return view('frontend.portfolio');
})->name('portfolio');

Route::get('/portfolio/{id}/show', function () {
    return view('frontend.portfolio-details');
})->name('portfolio.show');


Route::get('/blog', function () {
    $blogPosts = BlogPost::all();
    return view('frontend.blog', compact('blogPosts'));
})->name('blog');


Route::get('/blog/{slug}', function ($slug) {
    $post = BlogPost::where('slug', $slug)->first();
    $posts = BlogPost::all();
    return view('frontend.blog-details', compact('post', 'posts'));
})->name('blog.show');


Route::get('/about', function () {
    return view('frontend.about');
})->name('about');


Route::get('/services', function () {
   $services  = Service::all();
    return view('frontend.services', compact('services'));
})->name('services');

Route::get('/products', function () {
    return view('frontend.products');
})->name('products');


Route::get('/products/{id}/show', function () {
    return view('frontend.product-details');
})->name('products.show');

Route::get('/pricing', function () {
    return view('frontend.pricing');
})->name('pricing');



// Newsletters admin only
Route::get('newsletter_subscriptions', [NewsletterSubscriptionController::class, 'index'])
->name('newsletter_subscriptions.index');

Route::post('newsletter_subscriptions', [NewsletterSubscriptionController::class, 'store'])
->name('newsletter.subscribe');