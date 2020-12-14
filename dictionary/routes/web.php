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

Route::get('/dictionary', function (){
   return view('dictionary');

});

Route::post('/dictionary', function (\Illuminate\Http\Request $request){
    $dictionary = [
        'hello' => 'xin chao',
        'host'  => 'nong',
        'you'   => 'ban',
        'i'     => 'toi',
        'coffee'=> 'ca phe'
    ];

    $search = $request->input('name');
    $flag = 0;

    foreach ($dictionary as $key => $value) {
        if ($key == $search) {
            echo "From: " . $key . "<br>" . "Translated Word: " . $value;
            echo "<br>";
            $flag = 1;
        }
    }
        if ($flag == 0){
            echo "khong tim thay tu";
        }
        return view('dictionary');


});
