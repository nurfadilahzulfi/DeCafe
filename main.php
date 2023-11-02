<?php 
  //session_start();
  if(empty($_SESSION["username_decafe"])){
    header("location:login");
  }

  include "proses/connect.php";
  $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_decafe]'"); 
  $hasil = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Selamat Datang di DeCafe Website</title>
</head>
<body style="height: 3000px">
  <!--header-->
  <?php 
    include "header.php";
  ?>
<!--end header-->
    <div class="container-lg">
      <div class="row">
        <!-- Sidebar -->
        <?php 
          include "sidebar.php";
        ?>
        <!--End Sidebar-->
        <?php
         include $page;
        ?>
        <!-- End Content-->
      </div>
      <div class="fixed-bottom text-center mb-2">
        Copyright 2023 Nur Fadilah Zulfi
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html> 