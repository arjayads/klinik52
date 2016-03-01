<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');


    Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
        Route::get('list', ['uses' => 'UserController@all']);
    });

    Route::group(['prefix' => 'patient', 'middleware' => 'auth'], function () {
        Route::get('/', ['uses' => 'PatientController@index']);
        Route::get('onQueue', ['uses' => 'PatientController@onQueue']);
        Route::get('{patientId}/consult', ['uses' => 'PatientController@edit']);
        Route::get('countFind', ['uses' => 'PatientController@countFind']);
        Route::get('find', ['uses' => 'PatientController@find']);
        Route::get('{id}/detail', ['uses' => 'PatientController@detail']);
        Route::get('notFound', ['uses' => 'PatientController@notFound']);
        Route::get('add', ['uses' => 'PatientController@add']);
        Route::get('{id}', ['uses' => 'PatientController@findOne']);
        Route::get('{id}/edit', ['uses' => 'PatientController@edit']);

        Route::post('create', ['uses' => 'PatientController@create']);
        Route::post('update', ['uses' => 'PatientController@update']);
        Route::post('queue/{qid}/remove', ['uses' => 'PatientController@removeFromQueue']);
        Route::post('queue/{id}', ['uses' => 'PatientController@queue']);
        Route::post('resetQueue', ['uses' => 'PatientController@resetQueue']);
    });


    Route::group(['prefix' => 'medicine', 'middleware' => 'auth'], function () {
        Route::get('/', ['uses' => 'MedicineController@index']);

        Route::get('countFind', ['uses' => 'MedicineController@countFind']);
        Route::get('find', ['uses' => 'MedicineController@find']);
        Route::get('{id}/detail', ['uses' => 'MedicineController@detail']);
        Route::get('notFound', ['uses' => 'MedicineController@notFound']);
        Route::get('add', ['uses' => 'MedicineController@add']);
        Route::get('{id}', ['uses' => 'MedicineController@findOne']);
        Route::get('{id}/edit', ['uses' => 'MedicineController@edit']);

        Route::post('create', ['uses' => 'MedicineController@create']);
        Route::post('update', ['uses' => 'MedicineController@update']);

    });

});
