<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('index');
});
Route::get('/about-us', [AboutUsController::class, 'index']);

Route::get('/contact', function(){
    return view('contact');
});
Route::get('/login', function(){
    return view('login');
});
Route::get('/register', function(){
    return view('register');
});

Route::get('restaurants/{restaurant}', function(string $restaurant) {
    return view('restaurants', [
        'restaurant' => $restaurant
    ]);
}) ->name('rRestaurant');


Route::resource('products', ProductController::class);
