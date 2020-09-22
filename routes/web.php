<?php

use App\Http\Controllers\MathController;
use App\Http\Controllers\EntriesController;
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


Route::get('/archives/', function(){
    return view('archives.index');
});

Route::get('/archives/{category}/', function($category){
    return view('archives.category', ['category' => $category]);
});

Route::post('/join/', function(){
    return '入会申し込み完了';
});

Route::get('/join/', function(){
    return redirect()->to('/');
});


//laravel8からルートの設定方法が変わっているから注意↓
Route::get('/sum/{x}/{y}/', [MathController::class, 'sum']);

Route::get('/entries/', [EntriesController::class, 'index']);

Route::get('/{di}', function($id){
    return $id . 'のページ';
});