<?php
class mahasiswa{
    private $nama;
    private $tinggi;



    
    public function __construct($nama,$tinggi){      //jika ingin mengakses  yang ada secara otomatis 
        $this ->nama=$nama;
        $this ->tinggi=$tinggi;
   
    }  

    public function getNama(){
        return $this->nama;
    }
    public function getTinggi(){
        return $this -> tinggi;
    }

    public function hasilIdeal(){
        return $this -> tinggi >=155 ? 'Tinggi' : "Pendek";
        
    }
    public function predikat(){

        if ($this->tinggi >= 155) {
            return 'Ideal';
        } elseif ($this->tinggi <=155) {
            return 'tidak ideal';
        }
    }

}