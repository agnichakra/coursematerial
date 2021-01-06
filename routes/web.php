<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckStatus;
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

// ->middleware('checkstatus');

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
})->name('fileupload');

Route::post('/fileuploadpost', 'Frontend@saveDocument')->name('fileuploadpost');

Route::get('/showcountrydata',function () {
    $data['title'] = "CESC | Country Data";
    return view('country', $data);
})->name('countrydata');


/*Route::group(['middleware'=>['mygroup']], function(){

    Route::get('/', function () {
        return view('welcome');
    });

});*/