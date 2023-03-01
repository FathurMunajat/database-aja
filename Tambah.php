<?php
require 'loker.php';

if(isset($_POST["submit"]) ) {

  if(Tambah($_POST) > 0 ){
    echo "<script>
        alert('Data added successfully!');
        document.location.href = 'database.php';
        </script>";
  } else {
    echo "<script>
           alert('Data cannot be added!');
            document.location.href = 'database.php';
            </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<div class="position-absolute top-50 start-50 translate-middle">
    <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered">

    <h1>Add Your Data</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="Picture">Picture :</label>
            <input type="file" name="Picture" id"Picture"
            required>
        </li>

        <li>
            <label for="Nama">NAMA :</label>
            <input type="text" name="Nama" id"Nama"
            required>
        </li>

        <li>
            <label for="Nis">NIS :</label>
            <input type="text" name="Nis" id"Nis">
        </li>

        <li>
            <label for="Rombel">ROMBEL :</label>
            <input type="text" name="Rombel" id"Rombel">
        </li>

        <li>
            <label for="Rayon">RAYON :</label>
            <input type="text" name="Rayon" id"Rayon">
        </li>
        
        <li>
            <label for="Status">STATUS :</label>
            <input type="text" name="Status" id"Status">
        </li>

        <li>
            <button type="submit" name="submit"> Add your data! </button>
        </li>
    </ul>
</div>
</body>
</html>