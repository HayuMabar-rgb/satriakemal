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
    return view('welcome');
});
// route basic
Route::get('halo' , function(){
    return 'halo ini Aplikasi Laravel {erta,a Saya'.
        'Laravel is Magical Framework';
});
Route::get('profil/1' , function(){
    return 'ini bapak budi';
});
Route::get('profil/2',function(){
   return 'ini ibu budi'; 
});
Route::get('profil/3' ,function(){
    return 'ini kake budi';    
});
Route::get('profil/4' , function(){
    return 'ini nenek budi';
});
Route::get('profil/5' , function(){
    return 'ini Saya Budi';
});
// route parameter
Route::get('biodata/{kemal}',function($a)
{
    return 'halo ini biodata   '.$a;
});
Route::get('agus/{Alamat}/{sekolah}/{umur}',function($b ,$c , $d)
{
    return 'halo ini Alamatnya Agus : '.$b."<br>".
     'halo ini Sekolahnya Agus :'.$c."<br>" .
     'halo Umur Agus : '.$d. "<br>";
});
?>