<?php

use App\Http\Controllers\Customer\C_EmployeeController;
use App\Http\Controllers\Customer\C_RegisterController;
use App\Http\Controllers\Customer\C_TreatmentController;
use App\Http\Controllers\Reception\R_CustomerController;
use App\Http\Controllers\Reception\R_EmployeeController;
use App\Http\Controllers\Reception\R_RegisterController;
use App\Http\Controllers\Reception\R_TreatmentController;

Route::get('/', [C_AccountController::class, 'index']);
Route::get('/logowanie', [A_LoginController::class, 'loginForm']);
Route::get('/rejestracja', [C_RegisterController::class, 'registerForm']);
Route::post('/rejestracja', [C_RegisterController::class, 'registerCustomer']);
Route::get('/pracownicy', [C_EmployeeController::class, 'employees']);
Route::get('/zabiegi', [C_TreatmentController::class, 'treatments']);
Route::get('/admin', [R_RegisterController::class, 'index']);
Route::get('/admin/klienci', [R_CustomerController::class, 'customers']);
Route::get('/admin/klient/{id}', [R_CustomerController::class, 'accountDataView']);
Route::get('/admin/pracownicy', [R_EmployeeController::class, 'employees']);
Route::get('/admin/pracownik/{id}', [R_EmployeeController::class, 'accountInfo']);
Route::get('/admin/nowy_klient', [R_RegisterController::class, 'customerRegisterFormView']);
Route::post('/admin/nowy_klient', [R_RegisterController::class, 'customerRegister']);
Route::get('/admin/nowy_pracownik', [R_RegisterController::class, 'employeeRegisterFormView']);
Route::post('/admin/nowy_pracownik', [R_RegisterController::class, 'employeeRegister']);
Route::get('/admin/zabiegi', [R_TreatmentController::class, 'treatments']);
Route::get('/admin/zabiegi/nowy', [R_TreatmentController::class, 'newTreatment']);
Route::post('/admin/zabiegi/nowy', [R_TreatmentController::class, 'storeTreatment']);
Route::get('/admin/zabiegi/{id}/edytuj', [R_TreatmentController::class, 'editView']);
Route::post('/admin/zabiegi/{id}/edytuj', [R_TreatmentController::class, 'update']);
Route::post('/admin/zabiegi/{id}/usun', [R_TreatmentController::class, 'delete']);
