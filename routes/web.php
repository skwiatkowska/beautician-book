<?php

use App\Http\Controllers\Customer\C_AccountController;
use App\Http\Controllers\Customer\C_EmployeeController;
use App\Http\Controllers\Customer\C_RegisterController;
use App\Http\Controllers\Customer\C_TreatmentController;
use App\Http\Controllers\Customer\C_VisitController;
use App\Http\Controllers\Reception\R_CustomerController;
use App\Http\Controllers\Reception\R_EmployeeController;
use App\Http\Controllers\Reception\R_RegisterController;
use App\Http\Controllers\Reception\R_TreatmentController;
use App\Http\Controllers\Auth\A_LoginController;

Auth::routes();

Route::get('/' ,[C_AccountController::class, 'index']);
Route::get('/logowanie', [A_LoginController::class, 'loginForm']);
Route::post('/logowanie', [A_LoginController::class, 'login']);
Route::get('/wyloguj', [A_LoginController::class, 'logout']);
Route::get('/rejestracja', [C_RegisterController::class, 'registerForm']);
Route::post('/rejestracja', [C_RegisterController::class, 'registerCustomer']);
Route::get('/pracownicy/{id}', [C_EmployeeController::class, 'employeesDeadlines']);
Route::get('/pracownicy', [C_EmployeeController::class, 'employees']);
Route::get('/zabiegi', [C_TreatmentController::class, 'treatments']);
Route::get('/terminy', [C_VisitController::class, 'userVisits']);
Route::post('/terminy/dodaj', [C_VisitController::class, 'add']);

Route::group(['middleware' => 'customer'], function () {
    Route::get('/dane', [C_AccountController::class, 'accountInfo']);
    Route::get('/ustawienia', [C_AccountController::class, 'settings']);
    Route::post('/ustawienia/zmien_dane', [C_AccountController::class, 'changeData']);
    Route::post('/ustawienia/zmien_haslo', [C_AccountController::class, 'changePassword']);
    Route::post('/ustawienia/usun', [C_AccountController::class, 'delete']);
    Route::post('/terminy/usun', [C_VisitController::class, 'delete']);
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', [R_RegisterController::class, 'index']);
    Route::get('/admin/klienci', [R_CustomerController::class, 'customers']);
    Route::get('/admin/pracownicy', [R_EmployeeController::class, 'employees']);
    Route::get('/admin/zabiegi', [R_TreatmentController::class, 'treatments']);
    Route::get('/admin/zabiegi/nowy', [R_TreatmentController::class, 'newTreatment']);
    Route::post('/admin/zabiegi/nowy', [R_TreatmentController::class, 'storeTreatment']);
    Route::get('/admin/zabiegi/{id}/edytuj', [R_TreatmentController::class, 'editView']);
    Route::post('/admin/zabiegi/{id}/edytuj', [R_TreatmentController::class, 'update']);
    Route::post('/admin/zabiegi/{id}/usun', [R_TreatmentController::class, 'delete']);

    
    Route::get('/admin/terminy', [R_EmployeeController::class, 'employeesListForVisits']);
    Route::get('/admin/terminy/{id}', [R_EmployeeController::class, 'employeesListAndVisits']);
    Route::post('/admin/terminy/{id}/dodaj', [R_EmployeeController::class, 'addDeadlines']);
    Route::post('/admin/terminy/{id}/usun', [R_EmployeeController::class, 'deleteDeadline']);
    Route::post('/admin/terminy/{id}/zmien', [R_EmployeeController::class, 'changeDeadline']);
    Route::get('/admin/klient/{id}', [R_CustomerController::class, 'accountDataView']);
    Route::get('/admin/klient/{id}/wizyty', [R_CustomerController::class, 'customerVisits']);
    Route::post('/admin/klient/{id}/usun_wizyte', [R_CustomerController::class, 'deleteVisit']);
    Route::get('/admin/klient/{id}/nowa_wizyta', [R_CustomerController::class, 'employeesListForACustomer']);
    Route::get('/admin/klient/{id}/terminy/{employee_id}', [R_CustomerController::class, 'employeesDeadlinesForACustomer']);
    Route::post('/admin/klient/{customer_id}/terminy/{employee_id}/dodaj', [R_CustomerController::class, 'addVisit']);
    Route::get('/admin/klient/{id}/ustawienia', [R_CustomerController::class, 'settingsPage']);
    Route::post('/admin/klient/{id}/ustawienia/zmien_dane', [R_CustomerController::class, 'changeData']);
    Route::post('/admin/klient/{id}/ustawienia/zmien_haslo', [R_CustomerController::class, 'changePassword']);
    Route::post('/admin/klient/{id}/ustawienia/usun', [R_CustomerController::class, 'deleteAccount']); 
    Route::get('/admin/pracownik/{id}', [R_EmployeeController::class, 'accountInfo']);
    Route::get('/admin/pracownik/{id}/ustawienia', [R_EmployeeController::class, 'settingsView']);
    Route::post('/admin/pracownik/{id}/ustawienia/zmien_dane', [R_EmployeeController::class, 'changeData']);
    Route::post('/admin/pracownik/{id}/ustawienia/usun', [R_EmployeeController::class, 'deleteAccount']); 
    Route::get('/admin/nowy_klient', [R_RegisterController::class, 'customerRegisterFormView']);
    Route::post('/admin/nowy_klient', [R_RegisterController::class, 'customerRegister']);
    Route::get('/admin/nowy_pracownik', [R_RegisterController::class, 'employeeRegisterFormView']);
    Route::post('/admin/nowy_pracownik', [R_RegisterController::class, 'employeeRegister']);
});
