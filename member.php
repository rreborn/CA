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
  <style>
    body {
      font-family: 'sans serif';
      padding: 0;
      margin: 0;
    }
    .mid {
      text-align: center;
    }

    .navbar a {
      color: black;
    }

    .navbar {
      height: 50px;
      background: black;
    }

    .navbar ul {
      margin: 0;
      padding: 0;
      height: 100%;
    }

    .navbar li {
      color: white;
      font-weight: bold;
      line-height: 50px;
      list-style: none;
      display: inline-block;
      padding-left: 10px;
      padding-right: 20px;
      box-sizing: border-box;
      border-right: solid black 1px;
      background: #666666;
    }

    #button {
      font-size: 1.2em;
      padding: 12px 24px;
      color: white;
      border: 1px solid;
      border-radius: 4px;
      background-color: #5cb85c;
      border-color: #4cae4c;
      cursor: pointer;
      text-decoration: none;
    }

    #logo {
      vertical-align: middle;
      height: 30px;
    }

  </style>
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
