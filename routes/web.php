<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Jobsite.home.home');
})->name('Jobsite.home');

Auth::routes(['verify' => true, 'register' => false]);
Route::post('Form/login', 'Auth\Jobsite\LoginController@login')->name('Jobsite.login');
Route::get('Employeer', 'Auth\Jobsite\LoginController@employeeLogin')->name('Jobsite.employee.login');
Route::get('Candidate', 'Auth\Jobsite\LoginController@candidateLogin')->name('Jobsite.candidate.login');

//web routes main Register
Route::group(['namespace' => 'JobSite', 'middleware' => ['xss', 'setLanguage']], function () {
    
   // Route::get('/front-register', 'RegisterController@index')->name('Jobsite.register');
    Route::get('/candidate-register', 'RegisterController@candidateRegister')->name('candidate.register');
    Route::get('/employer-register', 'RegisterController@employerRegister')->name('employee.register');
    Route::post('/register', 'RegisterController@register')->name('Jobsite.save.register');


});




//Auth::routes(['verify' => true]);
//Auth::routes();
//Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::resource('user','UserController');

//Route::get('/home', 'HomeController@index')->name('home');
Route::resource('Main', 'LandingController');
