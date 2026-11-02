<?php

include '../include/connect.php';
session_start();
if(!isset($_SESSION['user_id']))
    {
        header("location:index.php");
    }

    $user = $_SESSION['user_id'];
    $result = $obj->query("select * from user where user_id='$user'");
    $row = $result->fetch_object();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
<div class="container">
  <p>My First Bootstrap Page....<?php echo $row->name;?></p>
  
</div>

</body>
</html>
