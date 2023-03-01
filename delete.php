<?php
require 'loker.php';

$id = $_GET["id"];

if( deleted($id) > 0 ) {
    echo "
          <script>
           alert('the data has been deleted!')
            document.location.href = 'database.php';
            </script>";
} else {
    echo "
    <script>
    alert('data failed to delete!')
     document.location.href = 'database.php';
     </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="position-absolute top-50 start-50 translate-middle">
    <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered">
<table><a href="database.php">back</a></table>
</div>
</body>
</html>