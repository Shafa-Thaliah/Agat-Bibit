<?php
session_start();
require ("koneksi.php");

$server = "localhost";
$username = "root";
$password = "";
$database = "agat";


// mysql_connect($server,$username,$password) or die("Koneksi gagal");
// mysql_select_db($database) or die("Database tidak bisa dibuka");
?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container-signin">
      <p>Check <a href="akun.php?user_fullname". urlencode($userName)>My Profile</a></p>
    </div>

  </body>
</html>
