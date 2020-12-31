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
    return view('welcome');
});

Route::get('/webservices', function () {
    return view('webservice');
})->name('ourwebservice');



Route::resource('coronas', 'CoronaController');





Route::post('/contactcontroller', 'Frontend@contact')->name('contactcon');

Route::get('/contact',function () {
    $data['title'] = "CESC | Contact";
    return view('contact', $data);
})->name('contactus');


Route::get('/fileupload',function () {
    $data['title'] = "CESC | file upload";
    return view('fileupload', $data);
})->name('contactus');

Route::post('/fileuploadpost', 'Frontend@saveDocument')->name('fileuploadpost');