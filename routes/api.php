<?php

use App\Jobs\CompanyCreated;
use App\Mail\CompanyCreatedWelcome;
use Illuminate\Support\Facades\Route;

Route::get('/teste', function () {
  CompanyCreated::dispatch('testestestes@email.com')->onQueue('queue_email');
//Mail::to('teste@teste.com')->send(new CompanyCreatedWelcome());
    return response()->json(['message' => 'success']);
});

Route::get('/', function () {
    return response()->json(['message' => 'success']);
});
