<?php

use Illuminate\Support\Facades\Route;

Route::get('external', function () {
    return redirect()->away('https://upperchat.upperfy.com.br');
})->name('admin.chat.upperfy');