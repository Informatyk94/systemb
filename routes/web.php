<?php

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
    return view('home');
});



Route::group(['middleware' => ['web']], function(){
    Route::post('/addproblem', 'AddProblemController@addproblem');
    Route::get('/panel', 'PanelController@panel');
    Route::get('/account', 'PanelController@account');
    Route::get('/research', 'ResearchController@research');
    Route::get('/show/{id}', 'ResearchController@show');
    Route::get('/addproblemform', 'AddProblemController@addproblemform');
    Route::get('/addproblemform/{id}/edit', 'AddProblemController@edit');
    Route::patch('addproblemform/update/{id}', 'AddProblemController@update');
    //Na przyszłość pozamieniaj używaj kontroli zasobów ścieżki
    //Route::resource('problem', 'AddproblemController');

    Auth::routes();

    Route::get('logout', 'Auth\LoginController@logout', function () {
        return abort(404);
    });
});


Route::get('/home', function () {
    return view('home');
});

