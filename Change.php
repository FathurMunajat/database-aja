<?php
require 'loker.php';


$id = $_GET["id"];


$kill = query ("SELECT * FROM students WHERE id = $id")[0];




if(isset($_POST["submit"]) ) {

  if( Change ($_POST) > 0 ){
    echo "<script>
        alert('The data is successful already!')
        document.location.href = 'database.php';
        </script>";

  } else {
    echo "<script>
           alert('Data failed already!')
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
    <title>Change data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <a href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"></a>
        <link rel="stylesheet" href="Change.css">
</head>
<body>
    
<nav>
    <center>
    <h3>Change Your Data</h3>
    </center>
</nav>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?= $kill ["id"]; ?>">

    <div class="position-absolute top-50 start-50 translate-middle">
    <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered">
    <div class="position-absolute top-50 start-50 translate-middle">
    
    <div class="card" style="width: 19rem; height: 550px;">
      <div class="card-body">
        <h5 class="card-title">Add your data</h5>
        <p class="card-text"><form action="" method="post" enctype="multipart/form-data">
    <ul>
        <p>
            <label for="Picture">Picture :</label>
            <input type="file" name="Picture" id"Picture"
            required value="<?= $kill ["Picture"];?>">
        </p>


        <p>
            <label for="Nama">NAMA :</label>
            <input type="text" name="Nama" id"Nama" required
            value="<?= $kill["Nama"]; ?>">
        </p>

        <p>
            <label for="Nis">NIS :</label>
            <input type="text" name="Nis" id"Nis" required
            value="<?= $kill ["Nis"]; ?>">
        </p>

        <p>
            <label for="Rombel">ROMBEL :</label>
            <input type="text" name="Rombel" id"Rombel" required
            value="<?= $kill ["Rombel"]; ?>">
        </p>

        <p>
            <label for="Rayon">RAYON :</label>
            <input type="text" name="Rayon" id"Rayon" required
            value="<?= $kill ["Rayon"]; ?>">
        </p>
        
        <p>
            <label for="Status">STATUS :</label>
            <input type="text" name="Status" id"Status" required
            value="<?= $kill ["Status"]; ?>">
        </p>

        <p>
            <button type="submit" name="submit"> Change your data! </button>
        </p>
    </ul>
</p>
    <table><a href="database.php">back</a></table>
</div>
</div>
</body>
</html>