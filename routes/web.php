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
    // metodo config per accedere al file config/pasta.php e passarlo alla view
    // il primo argomento di view è il nome del file in resources/views, il secondo un array
    $pasta = config('pasta');
    return view('homepage', ['array' => $pasta]);
});

Route::get('/product/{id?}', function($id = null) {
  $pasta = config('pasta');
    if (empty($id)) {
      return redirect('/');
    }
    if ($id > count($pasta)) {
      abort(404);
    }
    return view('product', ['idProduct' => $id, 'array' => $pasta]);
});
