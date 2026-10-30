<?php

//panggil file PropertyConstant
require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//Object
$produk = new Produk('P0001','Laptop', 10000000, 5);

//hasil 
echo "kode:".$produk->kode;
echo "</br>";

echo "produk:".$produk->nama;
echo "</br>";

echo "harga:".$produk->harga;
echo "</br>";

echo "stok:".$produk->stok;
echo "</br>";

echo "Pajak:".$produk->Pajak(). "%";
echo "</br>";

echo "Total Harga Setelah Pajak:Rp.".$produk->total() ;
echo "</br>";
