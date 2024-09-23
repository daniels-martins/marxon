<?php

use App\Models\Service;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinkerController;
use App\Models\BlogPost;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome_old');

/*
|--------------------------------------------------------------------------
| SEO RULES FOR Routes
|--------------------------------------------------------------------------
|
| Don't use ID's (numbers) for route url constructions eg. in product.show
| rather use product slugs or item slugs, ie. sth that has meaning to
| Search Engines, sth that they can understand
|
*/

//frontend routes

require 'frontend.php';

// Backend routes
require 'backend.php';

// dev routes
Route::get('/tinker',[TinkerController::class, 'index'])->name('pricing');
