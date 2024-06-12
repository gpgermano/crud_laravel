<?php

use App\Livewire\CreateCustomer;
use App\Livewire\Customers;
use App\Livewire\EditCustomer;
use App\Livewire\Register;
use App\Livewire\ViewCustomer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/customizar/cria', CreateCustomer::class);
Route::get('/customizar', Customers::class);
Route::get('/customizar/{customer}', ViewCustomer::class);
Route::get('/customizar/{customer}/edit', EditCustomer::class);



Route::get('/registrar', Register::class);
