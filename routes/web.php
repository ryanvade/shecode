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

Route::get('/', function () use ($router) {
    return view('index')->with([
      'faker' => Faker\Factory::create()
    ]);
});

Route::get('/register', 'SignupController@create');

Route::get('/faq', function() use ($router) {
  if(!env('FAQ_ENABLE', false))
  {
    abort(404);
  }
  return view('faq');
});

Route::post('/join', 'SignupController@store');
// Route::get('/mail', function(){
//   return new App\Mail\FormReceived('Ryan Owens');
// });
