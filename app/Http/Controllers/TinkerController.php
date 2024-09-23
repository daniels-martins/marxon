<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;
use Flasher\Prime\Notification\Envelope;

class TinkerController extends Controller
{
    public function index(): void
    {
        // dd(Service::all());
        // $firstService = Service::first();
        // $firstService->rel_blog = 'why-you-need-a-website-as-a-business-owner';
        // $firstService->save();
    }
}
