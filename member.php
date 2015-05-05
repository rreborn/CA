<?php session_start();
  if (isset($_SESSION['userid'])) {
    header('Location: http://localhost/member.php');
  }
?>

<!doctype html>
<html>
  <head>
    <title>Certificate Signing Request Page</title>
  </head>
<link rel="stylesheet" type="text/css" href="style.css">
  <body>
    <div class="navbar">
      <ul class="navbar-item">
        <li style="background: white; border-bottom: solid #AAAAAA 1px; border-right: none; height: 49px;"><img id="logo" src="logo.png"></li><a href="home"><li>Home</li></a><a href="sertifikat_user.php"><li>Sertifikat Anda</li></a>
      </ul>
    </div>
    <h1 class="mid" style="margin-top: 50px; margin-bottom: 50px; font-size: 3em">Selamat Datang, Anno</h1>
    <p class="mid" style="font-size: 1.1em">Anda memliki 2 sertifikat aktif</p><br>
    <div class="mid"><a href=".php" id="button">Buat Sertifikat Baru</a></div><br>
  </body>
</html>
