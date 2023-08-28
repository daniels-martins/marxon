<?php

use App\Models\Service;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
   $services = Service::all();
    return view('frontend.index_spa', compact('services'));
})->name('welcome');


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
    return view('frontend.blog');
})->name('blog');


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
