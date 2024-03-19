<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Gaya umum untuk form */
form {
  width: 300px;
  margin: 0 auto;
}

/* Gaya untuk label */
label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

/* Gaya untuk input text */
input[type="text"],
input[type="number"]
 {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Gaya untuk tombol submit */
input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

    </style>
</head>
<body>
<form method="get" action="proses.php">
    <label for="nama">Nama Mahasiswa:</label>
    <input type="text" id="nama" name="nama">

    <label for="tinggi">Tinggi:</label>
    <input type="number" id="tinggi" name="tinggi">

    <button type="submit">Submit</button>
</form>

</body>
</html>