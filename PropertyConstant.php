<?php

class Produk {
     
    //Property
    public string $kode; 
    public string $nama;
    public int $harga; 
    public int $stok; 

    //constant class Produk
    public const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
        
    }

    public function Pajak() {
        return self :: PAJAK *  100;
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }

}

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


