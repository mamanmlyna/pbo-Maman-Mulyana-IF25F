<?php

class Produk {
     
    //Property
    public string $kode; 
    public string $nama;
    public int $harga; 

    //constant class Produk
    public const PAJAK = 0.11;

    public function Pajak() {
        return self :: PAJAK *  100;
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }

}

//Object

$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;


//hasil 
echo "kode: ".$produk->kode;
echo "</br>";

echo "Produk: ".$produk->nama;
echo "</br>";

echo "harga:".$produk->harga;
echo "</br>";

echo "stok:".$produk->stok;
echo "</br>";

echo "Pajak:".$produk->Pajak(). "%";
echo "</br>";

echo "Total Harga Setelah Pajak:Rp.".$produk->total() ;


