<?php

use App\Http\Controllers\Reception\R_CustomerController;
use App\Http\Controllers\Reception\R_EmployeeController;
use App\Http\Controllers\Reception\R_RegisterController;

Route::get('/admin', [R_RegisterController::class, 'index']);
Route::get('/admin/klienci', [R_CustomerController::class, 'customers']);
Route::get('/admin/klient/{id}', [R_CustomerController::class, 'accountDataView']);
Route::get('/admin/pracownicy', [R_EmployeeController::class, 'employees']);
Route::get('/admin/pracownik/{id}', [R_EmployeeController::class, 'accountInfo']);
Route::get('/admin/nowy_klient', [R_RegisterController::class, 'customerRegisterFormView']);
Route::post('/admin/nowy_klient', [R_RegisterController::class, 'customerRegister']);
Route::get('/admin/nowy_pracownik', [R_RegisterController::class, 'employeeRegisterFormView']);
Route::post('/admin/nowy_pracownik', [R_RegisterController::class, 'employeeRegister']);
