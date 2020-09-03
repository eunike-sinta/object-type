<?php
class belajar{
    var $str ;
    public function tampung($temp){
        return $this->str=$temp;
    }
    
    public function cetak(){
        echo $this->str;
    }
}
$pesan = new belajar();
$pesan->tampung("Hayy");
$pesan->cetak();
?>  