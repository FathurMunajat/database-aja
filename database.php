<?php
require 'loker.php';
$kills = query("SELECT * FROM students");

if ( isset ($_POST["Search"]) ) {
    $kills = Search($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="database.css">
</head>
<body>

  


    <!-- search -->

    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Daftar Siswa</a>

    <form class="d-flex" role="search" action="" method="post">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword"
                autofocus autocomplete="off">
      <button class="btn btn-outline-success" type="submit" name="Search">Search</button>
    </form>
  </div>
</nav>

<br>

<div>
    
<div class="position-absolute top-50 start-50 translate-middle">
    <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered">
       <!-- Table -->
    <tr>

        <th>No.</th>
        <th>Picture</th>
        <th>Nama</th>   
        <th>Nis</th>
        <th>Rombel</th>
        <th>Rayon</th>
        <th>Status</th>
        <th colspan="2">Option</th>

    </tr>
    <?php $i= 1; ?>
<?php foreach( $kills as $kill ): ?>
    <tr>
        <td><?= $i; ?></td>
        <td><img src="img/<?=$kill ["Picture"];?>" alt="" width = "30 rem"  ></td>
        <td><?= $kill ["Nama"];?></td>
        <td><?= $kill ["Nis"];?></td>
        <td><?= $kill ["Rombel"];?></td>
        <td><?= $kill ["Rayon"];?></td>
        <td><?= $kill ["Status"];?></td>
        <td>
            <a href="change.php?id=<?= $kill ["id"]?>" onclick= "return confirm ('yakin mau diubah?')">Change</a>
        </td>
        <td>
            
        <a href="delete.php?id=<?= $kill ["id"]?>" onclick= "return confirm ('yakin mau dihapus?')">Delete</a>
        </td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>
    </table>
    <table><a href="Tambah.php">Add data</a></table>
    </div>
    </div>

</body>
</html>