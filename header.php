<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    
</head>
<body>
<div class="p-5 bg-image" style="
        background-image: url('https://asset.kompas.com/crops/Yn331T3ABD2Twkqhp_sO-K0m6Go=/429x39:5529x3439/750x500/data/photo/2021/05/10/609931bb5334c.jpg');
        height: 0px;">
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">PERPUS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="buku.php">Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="histori_peminjaman.php">Histori Peminjaman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="log_out.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container bg-light rounded" style="margin-top:10px">
</div>    
  </body>
</html>

