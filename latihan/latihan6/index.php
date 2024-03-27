<?php

include 'proses.php';

//show data atau memperlihatkan data
$query ='SELECT * FROM mahasiswa';
$result = $conn->query($query);

?>









<!DOCTYPE html>
<html>
<head>
<style>
body {
    font-family: Arial, sans-serif;
}

.container {
    width: 300px;
    padding: 16px;
    background-color: white;
    border-radius: 5px;
    margin: 0 auto;
    margin-top: 100px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
}

input[type=text], input[type=number] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
</style>
</head>
<body>
<h2>Data Mahasiswa</h2>
    <table border="1" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Tinggi</th>
            <th>Berat</th>
            <th>Semester</th>
        </tr>
        <?php while($row=$result->fetch_assoc()) : ?>
        <tr>
            <td> <?=$row['id'] ?> </td>
            <td> <?=$row['nama'] ?> </td>
            <td> <?=$row['nim'] ?> </td>
            <td> <?=$row['tinggi'] ?> </td>
            <td> <?=$row['berat'] ?> </td>            
            <td> <?=$row['semester'] ?> </td>
        </tr>
        <?php endwhile; ?>
   
    </table>
    



<div class="container">
  <form action="masuk.php" method='post'>
  <h2 style=text-align:center>TAMBAH DATA</h2>
    <label for="#">Nama</label>
    <input type="text"  name="nama" placeholder="Nama Anda..">

    <label for="#">Nim</label>
    <input type="number"  name="nim" placeholder="Nim Anda..">

    <label for="#">Tinggi</label>
    <input type="number"  name="tinggi" placeholder="Tinggi Anda..">

    <label for="#">Berat Badan</label>
    <input type="number"  name="berat" placeholder="Berat Badan Anda..">

    <label for="#">Semester</label>
    <input type="number"  name="semester" placeholder="Semester Anda..">

    <input type="submit" value="tambah">
  </form>
</div>

</body>
</html>