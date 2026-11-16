<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/composting', [PageController::class, 'composting'])->name('composting');

Route::get('/products', [PageController::class, 'products'])->name('products.index');
Route::get('/products/film-extrusion', [PageController::class, 'film'])->name('products.film');
Route::get('/products/injection-molding', [PageController::class, 'injection'])->name('products.injection');
Route::get('/products/extrusion-coating', [PageController::class, 'extrusion'])->name('products.extrusion');
Route::get('/products/zero-waste-solutions', [PageController::class, 'waste'])->name('products.waste');
Route::get('/products/garments', [PageController::class, 'garments'])->name('products.garments');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

// Permanent redirects for legacy Core PHP URLs.
Route::redirect('/index.php', '/', 301);
Route::redirect('/home.php', '/', 301);
Route::redirect('/profile.php', '/about', 301);
Route::redirect('/about.php', '/about', 301);
Route::redirect('/composting.php', '/composting', 301);
Route::redirect('/products.php', '/products', 301);
Route::redirect('/film.php', '/products/film-extrusion', 301);
Route::redirect('/injection.php', '/products/injection-molding', 301);
Route::redirect('/extrusion.php', '/products/extrusion-coating', 301);
Route::redirect('/waste.php', '/products/zero-waste-solutions', 301);
Route::redirect('/garments.php', '/products/garments', 301);
Route::redirect('/contact.php', '/contact', 301);
