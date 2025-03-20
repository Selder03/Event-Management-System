<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome'); // Homepage
});

Route::get('/login', function () {
    return view('auth.login'); // Login Page
})->name('login');

Route::get('/signup', function () {
    return view('auth.signup'); // Sign up
});

Route::get('/signup/student', function () {
    return view('auth.signup-form-student');
})->name('signup.student');

Route::get('/signup/organizer', function () {
    return view('auth.signup-form-organizer');
})->name('signup.organizer');

Route::post('/register', function () {
    // Simulate successful registration (you can replace this with actual DB saving logic)
    Session::flash('success', 'Registration successful. Please log in.');
    return redirect('/login');
})->name('register.user');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot.password');

// Redirect to event feed after login
Route::get('/feed', function () {
    return view('event.feed');
});

// Example: Profile page
Route::get('/profile', function () {
    return view('event.profile');
});

Route::get('/create_event', function () {
    return view('event.create_event');
});

Route::post('/post-event', function () {
    return back()->with('success', 'Event Created Successfully!');
});