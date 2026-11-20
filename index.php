<?php

//panggil file PropertyConstant
require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//Object
$produk = new Produk();

$produk->setkode('P0001')
       ->setNama('Laptop')
       ->setHarga(1000000)
       ->setStok(5);

//hasil 
echo "kode:".$produk->getKode();
echo "</br>";

echo "produk:".$produk->getNama();
echo "</br>";

echo "harga:".$produk->getHarga();
echo "</br>";

echo "stok:".$produk->getStok();
echo "</br>";

echo "Pajak:".$produk->Pajak(). "%";
echo "</br>";

echo "Total Harga Setelah Pajak:Rp.".$produk->total() ;
echo "</br>";
