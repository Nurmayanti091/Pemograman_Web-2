<?php 

$host ='localhost';
$username ='root';
$password ='';
$database ='dbtinggi';


$conn = new mysqli($host,$username,$password,$database);    //membuka koneksi

if ($conn->connect_error){
    die('connection failed:' .$conn->connect_error);
}



