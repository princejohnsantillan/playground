<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
});

Route::get('/testimonials', function() {
    return view('testimonials', [ 'testimonials' => \App\Models\Testimonial::all()]);
});
