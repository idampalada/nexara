<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('demo-web-agency-people');
});

Route::get('/demo-web-agency-contact.html', function () {
    return view('demo-web-agency-contact');
});
Route::get('/demo-web-agency-blog.html', function () {
    return view('demo-web-agency-blog');
});

Route::get('/demo-web-agency-people.html', function () {
    return view('demo-web-agency-people');
});

Route::get('/demo-web-agency-projects.html', function () {
    return view('demo-web-agency-projects');
});

Route::get('/demo-web-agency-expertise.html', function () {
    return view('demo-web-agency-expertise');
});

Route::get('/demo-web-agency-about.html', function () {
    return view('demo-web-agency-about');
});

Route::get('/demo-web-agency.html', function () {
    return view('demo-web-agency');
});