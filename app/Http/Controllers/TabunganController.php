<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Tabungan;

class TabunganController extends Controller
{
    public function index(){
    $tabungan = Tabungan::all();
    return $tabungan;
}
public function show(){
    $tabungan = Tabungan::find($id);
    return $tabungan;
}
public function store($a, $b , $c , $d ){
    $tabungan = new Tabungan();
    $tabungan ->nis =  $a;
    $tabungan ->nama =   $b;
    $tabungan ->kelas =$c;
    $tabungan ->jml =  $d;
    $tabungan ->save();
    return $tabungan;

}
public function delete($id)
{
    $tabungan = Tabungan::find($id);
    $tabungan->delete();
    return $tabungan;
}
}
