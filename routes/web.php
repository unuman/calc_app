<?php

use App\Http\Controllers\CalcController; //追加
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/controller/calcs/{num1}/{operator}/{num2}', //パラメータ「値1」「演算子」「値2」
    [CalcController::class, 'result']  //コントローラー名はCalcController、アクション名はresult
);
