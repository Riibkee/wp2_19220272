<?php
class model_latihan1 extends CI_Model
{
 //membuat variable untuk menampung nilai
 public $n1, $n2, $hasil;
 //method penjumlahan
 public function jumlah($n1 = null, $n2 = null)
 {
 $this->nilai1 = $n1;
 $this->nilai2 = $n2;
 $this->hasil = $this->nilai1 + $this->nilai2;
 return $this->hasil;
 }
}