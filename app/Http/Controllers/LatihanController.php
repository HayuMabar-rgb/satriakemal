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

public function loop1()
    {
        $data = [
            ['Nama'=>'kemalpasyua','Kelas'=>'XI-RPL 1','uang_jajan'=>15000],
            ['Nama'=>'Qaysa','Kelas'=>'XI-RPL 1','uang_jajan'=>15000],
            ['Nama'=>'Romi','Kelas'=>'XI-RPL 1','uang_jajan'=>15000],
            ['Nama'=>'Fadlan','Kelas'=>'XI-RPL 1','uang_jajan'=>15000],
        ];
        //dd($data);
        foreach($data as $val => $key)
        {
            echo"Nama               : ". $key['Nama'].
                " <br> Kelas        : ". $key['Kelas'].
                " <br> Uang_Jajan   : ". $key['uang_jajan'].
                "<hr>"; 
        }
    }

    // Constroller Loop 2
    public function loop2()
    {
        $data =[['nama' =>'satriakemal','kelas'=>'RPL 1', 'uangjajan'=>10000],
                ['nama' =>'Memet','kelas'=>'RPL 2', 'uangjajan'=>50000],
                ['nama' =>'Restu','kelas'=>'RPL 3', 'uangjajan'=>30000],
                ['nama' =>'David','kelas'=>'RPL 4', 'uangjajan'=>15000],
                ['nama' =>'Riz','kelas'=>'RPL 5', 'uangjajan'=>5000]
                ];
        
        foreach ($data as $val => $key) {
            if ($key['uangjajan']>=50000) {
                $ta=$key['uangjajan']*25/100;
                $total=$key['uangjajan']-$ta;
            }
            elseif ($key['uangjajan']>=25000) {
                $ta=$key['uangjajan']*15/100;
                $total=$key['uangjajan']-$ta;
            }
            elseif ($key['uangjajan']>=10000) {
                $ta=$key['uangjajan']*10/100;
                $total=$key['uangjajan']-$ta;
            }else {
                $ta=0;
                $total=$key['uangjajan'];
            }
            echo "Nama : ".$key['nama'].
            "<br>Kelas : ".$key['kelas'].
            "<br>Uang Jajan : ".$total.
            "<br>Uang Tabungan : ".$ta.
            "<br>Total Uang Jajan  : ".$key['uangjajan']. 
            "<hr>";
        }
    }

    // Constroller Loop 3
    public function loop3()
    {
        $data =[['nama' =>'Satria kemal','agama'=>'Islam','alamat'=>'Bandung','jenis_kelamin'=>'Laki-laki', 'Jabatan'=>'Manager','jam_kerja'=>300],
                ['nama' =>'Tia','agama'=>'Islam','alamat'=>'Jakarta','jenis_kelamin'=>'Perempuan', 'Jabatan'=>'Sekretaris', 'jam_kerja'=>100],
                ['nama' =>'afi','agama'=>'Islam','alamat'=>'Bekasi','jenis_kelamin'=>'Laki-laki', 'Jabatan'=>'Staff', 'jam_kerja'=>255],
                ['nama' =>'puput','agama'=>'Islam','alamat'=>'Bogor','jenis_kelamin'=>'Perempuan', 'Jabatan'=>'Sekretaris', 'jam_kerja'=>220],
                ['nama' =>'Riska','agama'=>'Islam','alamat'=>'Bojong','jenis_kelamin'=>'Laki-laki', 'Jabatan'=>'Staff', 'jam_kerja'=>200]
                ];
        foreach ($data as $key => $value) {
                if ($value['Jabatan']=='Manager') {
                    $Gaji=5000000;
                if ($value['jam_eyerja'] >=250) {
                    $bonus=$Gaji/10;
                }
                elseif ($value['jam_kerja'] >=200) {
                    $bonus=$Gaji*5/1000;
                }else {
                    $bonus=0;
                }
                $gaji_bersih = $Gaji+$bonus;
                $potongan=$gaji_bersih*2.5/100;
                $gt=$gaji_bersih-$potongan;
                }
                elseif ($value['Jabatan']=='Sekretaris') {
                    $Gaji=3500000;
                if ($value['jam_kerja'] >=250) {
                    $bonus=$Gaji/10;
                }
                elseif ($value['jam_kerja'] >=200) {
                    $bonus=$Gaji*5/100;
                }else {
                    $bonus=0;
                }
                $gaji_bersih = $Gaji+$bonus;
                $potongan=$gaji_bersih*2.5/100;
                $gt=$gaji_bersih-$potongan;
                }
                elseif ($value['Jabatan']=='Staff') {
                    $Gaji=2500000;
                if ($value['jam_kerja'] >=250) {
                    $bonus=$Gaji/10;
                }
                elseif ($value['jam_kerja'] >=200) {
                    $bonus=$Gaji*5/100;
                }else {
                    $bonus=0;
                }
                $gaji_bersih = $Gaji+$bonus;
                $potongan=$gaji_bersih*2.5/100;
                $gt=$gaji_bersih-$potongan;
                }
                echo "Nama : ".$value['nama'].
                "<br>Agama : ".$value['agama'].
                "<br>Alamat : ".$value['alamat'].
                "<br>Jenis Kelamin : ".$value['jenis_kelamin'].
                "<br>Jabatan : ".$value['Jabatan'].
                "<br>Jam kerja : ".$value['jam_kerja'].
                "<br>Gaji : ".$Gaji.
                "<br>Bonus : ".$bonus.
                "<br>Potongan : ".$potongan.
                "<br>Gaji Total : "." Rp . " . $gt.
                "<hr>";
        }
    }
}