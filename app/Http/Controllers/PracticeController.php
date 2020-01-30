<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class PracticeController extends Controller
{
 public function pass(){
     $data = "reza Oktomaniani<br>";
     $data1 = "Dadang sukmara";
          return view('latihan',compact('data'));
          return view('latihan',compact('data1'));
 }
 public function pass1(){
    $siswa = [
        ['nama'=>'kasman','Kelas'=>'XI RPL 1'],
        ['nama'=>'rompangs','Kelas'=>'XI RPL 2'],
    ];
    return view('latihan1',['data'=>$siswa]);
 }
 public function pass2(){
     $tabungan = Tabungan::all()->take(10);
    return view ('latihan2',compact('tabungan'));
    }
}
