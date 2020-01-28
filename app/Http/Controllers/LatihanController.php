<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller

{
public function halo()
{
    return 'nama Saya Kemal';
}
public function tambah($a=null ,$b=null ,$cc = ""){
    if ($a==null && $b=null) {
        $cc = 'Silahkan Masukan Angka';

        if (isset($a)) {
            $cc ='Masukan Nilai Satu Lagi';            

        }
        if (isset($b)) {
            $c=$a + $b;
            $cc = "$a+$b = $c";

        }
}
return $cc;

}

public function Kurang($a,$b){
    $c = $a-$b;
    return $c;
}
public function pembagian($a,$b){
    $c =$a/$b;
    return $c;


}
public function Perkalian($b,$d){
    $c = $b * $d;
    return $c;

}


public function loop(){
    $data = [
        ['$nama'=>'Hari' , '$Kelas'=>'XI RPL 1','$Uang_Jajan'=>'25000'].
        ['$nama'=>'Memet', '$Kelas'=>'XI RPL 2','$Uang_Jajan'=>'50000'].
        ['$nama'=>'Restu', '$Kelas'=>'XI RPL 1','$Uang_Jajan'=>'70000'].
        ['$nama'=>'david', '$Kelas'=>'XI RPL 3','$Uang_Jajan'=>'65000']
    ];
foreach($data as $val => $key)
{
    echo "nama              :".$key['nama'].
    "- kelas           :".$key['Kelas'].
    "- uanng jajan     :".$key['uang_jajan'].
    "<hr>";
}
}

public function loop2(){
    $data = [
     ['$nama'=>'Kemal','$agama'=>'islam','$alamat'=>'Moch toha','$jabatan '=>'Manager','Jam'=>'25'].
      ['$nama'=>'deni','$agama'=>'islam','$alamat'=>'Suka haji','$jabatan '=>'Polisi hajat','Jam'=>'25'].
      ['$nama'=>'Danu','$agama'=>'islam','$alamat'=>'cibiru','$jabatan '=>'Polisi hajat','Jam'=>'25']
    ];
    foreach($data as $val => $key);
    
    }


}