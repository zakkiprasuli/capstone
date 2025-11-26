<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function(){
    return view('auth.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('cashier.dashboard');
});
Route::get('/pos', function () {
    return view('cashier.pos');
});
Route::get('/logout', function () {
    return 'Logout nanti backend handle';
});
Route::get('/transaction', function () {
    return view('transactions.index');
})->name('transaction');

