<?php

class Produk {
     
    //Property
    public string $kode; 
    public string $nama;
    public int $harga; 

    //constant class Produk
    public const PAJAK = 0.11;

}

//Object

$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//Hitung Pajak
$pajak = Produk :: PAJAK *  100;
$jumlahPajak = $produk->harga * Produk::PAJAK;

//total
$total = $produk->harga + $jumlahPajak;


//hasil 
echo "kode: ".$produk->kode;
echo "</br>";

echo "Produk: ".$produk->nama;
echo "</br>";

echo "harga:".$produk->harga;
echo "</br>";

echo "stok:".$produk->stok;
echo "</br>";

echo "Pajak:".$pajak;
echo "</br>";

echo "Total Harga Setelah Pajak:Rp.".$total;


