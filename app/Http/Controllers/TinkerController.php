<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class TinkerController extends Controller
{
    public function index() {
      dd(Service::all());
    }
    
}
