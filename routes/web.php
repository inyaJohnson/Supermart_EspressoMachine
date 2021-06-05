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

Route::get('/test', function () {
    $test = new \App\EspressoMachine\StandardWaterContainer(10);
    echo $test->getWater() . "<br/>";
    echo $test->addWater(8) . "<br/>";
    echo $test->getWater() . "<br/>";
    echo $test->useWater(8) . "<br/>";

    echo $test->addWater(6) . "test<br/>";
    echo $test->useWater(6) . "<br/>";



});
