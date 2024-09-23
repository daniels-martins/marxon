<?php

use App\Http\Controllers\BlogPostController;
use App\Models\Service;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinkerController;

/*
|--------------------------------------------------------------------------
| Backend Web Routes
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

// move to tailwind dashboard later
Route::middleware("auth")->prefix('admin')->group(function () {

Route::get('/', function () {
   $services = Service::all();
    return view('backend.index', compact('services'));
})->name('dashboard');


Route::get('blog/create', [BlogPostController::class, 'create'])->name('blog.create');
Route::post('/blog', [BlogPostController::class, 'store'])->name('blog.store');
Route::get('blog/{blogPost}/edit', [BlogPostController::class, 'edit'])->name('blog.edit');
Route::patch('blog/{blogPost}', [BlogPostController::class, 'update'])->name('blog.update');



// Route::get('/products/{id}/show', function () {
//     return view('frontend.product-details');
// })->name('products.show');

// Route::get('/pricing', function () {
//     return view('frontend.pricing');
// })->name('pricing');

});
