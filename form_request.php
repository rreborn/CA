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

    #inputfile {
      border: solid black 1px;
    }

    #click_buat {
      color: #0084ff;
      cursor: pointer;
    }

    #csr_div {
      display: none;
      width: 700px;
      margin: auto;
    }

    .form-row {
      margin-bottom: 10px;
    }

    .field-label {
      display: inline-block;
      width: 200px;
    }

    .field {
      display: inline-block;
      width: 400px;
    }

    #button {
      display: block;
      margin: auto;
      font-size: 1.2em;
      padding: 8px 24px;
      color: white;
      border: 1px solid;
      border-radius: 4px;
      background-color: #5cb85c;
      border-color: #4cae4c;
      cursor: pointer;
      text-decoration: none;
    }

    #output {
      margin: auto;
      display: block;
    }

    .hint {
      font-size: 0.8em;
      color: #777777;
    }

  </style>
  <body>
    <div class="navbar">
      <ul class="navbar-item">
        <li style="background: white; border-bottom: solid #AAAAAA 1px; border-right: none; height: 49px;"><img id="logo" src="logo.png"></li><a href="member.php"><li>Home</li></a><a href="sertifikat_user.php"><li>Sertifikat Anda</li></a>
      </ul>
    </div>
    <h1 class="mid" style="margin-top: 50px; margin-bottom: 50px; font-size: 2em">Halaman Request Sertifikat</h1>
    <p class="mid" style="font-size: 1.1em">Silahkan upload file CSR anda</p>
    <form id="form" class="mid">
      <input id="inputfile" type="file" name="csr">
    </form>
    <br>
    <p class="mid" id="info_buat" style="font-size: 0.8em; color: #555555;">Belum punya file CSR? <a id="click_buat" onclick="show_form()">buat sekarang</a></p>
    <div id="csr_div">
      <div class="form-row">
        <div class="field-label">Common Name</div><input class="field" id="csr-cn">
      </div>
      <div class="form-row">
        <div class="field-label">Organisasi</div><input class="field" id="csr-o">
      </div>
      <div class="form-row">
        <div class="field-label">Departemen / Unit</div><input class="field" id="csr-ou">
      </div>
      <div class="form-row">
        <div class="field-label">Email</div><input class="field" id="csr-email">
      </div>
      <div class="form-row">
        <div class="field-label">Kota</div><input class="field" id="csr-l">
      </div>
      <div class="form-row">
        <div class="field-label">Provinsi</div><input class="field" id="csr-st">
      </div>
      <button id="button" onclick="generate_command()">Buat Command</button>
      <p class="mid hint">Setelah mengisi, silahkan copy command di bawah ini di terminal anda</p>
      <textarea id="output" cols="60" class="mid" disabled>
        Silahkan isi form di atas terlebih dahulu
      </textarea>
    </div>
    <script>
      function show_form() {
        document.getElementById('csr_div').style.display = "block";
        document.getElementById('info_buat').style.display = "none";
      }
      function generate_command() {
        cn = document.getElementById('csr-cn').value;
        o = document.getElementById('csr-o').value;
        ou = document.getElementById('csr-ou').value;
        l = document.getElementById('csr-l').value;
        st = document.getElementById('csr-st').value;
        e = document.getElementById('csr-email').value;
        string = 'openssl req -new -newkey rsa:2048 -nodes -out "' + cn + '.csr" -keyout "' + cn + '.key" -subj "/C=ID' +
                  '/ST=' + st + '/L=' + l + '/O=' + o + '/OU=' + ou + '/emailAddress=' + e +'/CN=' + cn + '"';
        document.getElementById('output').innerHTML  = string;
      }
    </script>
  </body>
</html>
