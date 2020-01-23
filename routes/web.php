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
Route::get('pesan/{a?}/{b?}/{c?}', function($makan = null , $minum = null , $harga = null){
if (isset($makan)) {
    $makan = "Anda memesan $makan";
    echo $makan;
}
if (isset($minum)) {
    $minum = "& $minum Dengan Harga $ 25000<br>";
    echo $minum;
    echo "->25000 Size Medium<br>";
    echo "->35000 Size large<br>";
    echo "->25000 small<br>";
}
if (!$makan && !$minum) {
    return "anda belum memesan sesuatu";
}
if ($harga == 25000 ) {
    echo "Anda memesan Kopi dengan Ukuran medium";
}
if ($harga == 35000) {
    echo "Anda memesan Kopi dengan ukuran large";
}
if ($harga < 25000) {
    echo "anda memesan kopi dengan ukuran Small";
}
if ($harga < 0) {
    echo "harga yang anda masukan salah";
}
});

Route::get ('Tni/{Nama?}/{BB?}/{Umur?}' , function ($nama = null , $bb = null , $umur = null , $pangkat){
    if ($nama == null) {
        echo "Masukan Data Dengan Benar";
    }    
    if ($bb == 76-100) {
        echo "anda harus menurunkan berat badan anda";
    }    
    if ($bb == 65-75) {
        echo "berat badan anda ideal";
    }
    if ($bb == 50-64) {
        echo "berat badan anda kurang";
    }
    if ($bb < 50) {
        echo "Anda Kurang Nutrisi";
    }
    
    if (isset($nama)) {
        echo "Nama Anda         :$nama";
    }
    if (isset($bb)) {
        echo "berat badan anda  :$bb";
    }
    if (isset($umur)) {
    echo"umur anda adalah $umur";
    }
});
Route::get('testmodel/1', function() {
    $post = App\Post::find(1);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post();  
    });