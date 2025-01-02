<?php

use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('index');
    echo "server is working";
});
Route::get('/about-us', function() {
    $restaurant = 'Dickens & Jones';
    return view('about-us', [
        'company' => $restaurant
    ]);
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/restaurants', function(){
    $restaurant = "Dickens & Jones";
    return view('restaurants', [
        'restaurant' => $restaurant
    ]);
});
Route::get('/login', function(){
    return view('login');
});
Route::get('/register', function(){
    return view('register');
});




Route::get("/test/", [AboutUsController::class, 'index']);
