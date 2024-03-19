


<?php include_once 'form_nilai.php'?>


<?php 
//membuat kelas atau blue print 
class Manusia {
    public $nama;
    public $tinggi;
    

  



    public function setNama($nama)
    {
        $this -> nama = $nama;
    }
    public function setTinggi($tinggi)
    {
        $this -> tinggi = $tinggi;
    }

    public function getInfo()
    {
        return "Nama :". $this->nama . " , Tinggi : " . $this -> tinggi;
    }

}



