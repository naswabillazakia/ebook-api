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

//string
Route::get('/coba', function (){
        return "haloo awaaa sayanggg";

});

//array
Route::get('coba1', function (){
    return  ['naswa','novita', 'aliya', 'nabila'];


});

//objek json (key velue )
Route::get('coba2', function (){
    return [
        'Nama' => 'Naswa',
        'Kelas' => 'XII RPL 5',
        'Nis' => 3103120158
    ];
});
    // objek json 
    Route::get('coba3', function (){
        return response()->json(
         [
            'Nama' => 'Naswa',
            'Kelas' => 'XII RPL 5',
            'Nis' => 3103120158
        ], 201
        
    );

    });