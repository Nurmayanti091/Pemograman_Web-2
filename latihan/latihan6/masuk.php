<?php 

include 'proses.php';

$nama =$_POST['nama'];
$nim =$_POST['nim'];
$tinggi=$_POST['tinggi'];
$berat =$_POST['berat'];
$semester ==$_POST['semester'];




$query ="INSERT INTO mahasiswa(nama,nim,tinggi,berat,semester)
        VALUES ('$nama','$nim','$tinggi','$berat','$semester')";

if($conn ->query($query)===TRUE){
    header('location:index.php');
} else{
    echo'Error:' .$query .'<br>'.$conn->error;

}
$conn ->close();     //menutup koneksi




?>