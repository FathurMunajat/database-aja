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
    <link rel="stylesheet" href="Tambah.css">
</head>
<body>

<div class="position-absolute top-50 start-50 translate-middle">
    
<div class="card" style="width: 19rem; height: 550px;">
  <div class="card-body">
    <h5 class="card-title">Add your data</h5>
    <p class="card-text"><form action="" method="post" enctype="multipart/form-data">
    <ul>
        <p>
            <label for="Picture">Picture :</label>
            <input type="file" name="Picture" id"Picture"
            required>
        </p>

        <p>
            <label for="Nama">NAMA :</label>
            <input type="text" name="Nama" id"Nama"
            required>
        </p>

        <p>
            <label for="Nis">NIS :</label>
            <input type="text" name="Nis" id"Nis">
        </p>

        <p>
            <label for="Rombel">ROMBEL :</label>
            <input type="text" name="Rombel" id"Rombel">
        </p>

        <p>
            <label for="Rayon">RAYON :</label>
            <input type="text" name="Rayon" id"Rayon">
        </p>
        
        <p>
            <label for="Status">STATUS :</label>
            <input type="text" name="Status" id"Status">
        </p>

        <p>
            <button type="submit" name="submit"> Add your data! </button>
        </p>
    </ul>
</p>
    <a href="database.php" class="btn btn-primary">Back</a>
</div>
</div>
</body>
</html>