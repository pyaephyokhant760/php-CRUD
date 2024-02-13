<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('contact',[CustomerController::class,'contact'])->name('contact#page');
Route::post('view',[CustomerController::class,'view'])->name('view#page');
Route::get('delete/{id}',[CustomerController::class,'delete'])->name('delete#page');
Route::get('read/{id}',[CustomerController::class,'read'])->name('read#page');
Route::get('edit/{id}',[CustomerController::class,'edit'])->name('edit#page');
Route::post('postedit/{id}',[CustomerController::class,'postedit'])->name('postedit#page');
