<?php session_start();?>

<!doctype html>
<html>
  <head>
    <title>Persetujuan</title>
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
      background: #888888;
    }

  </style>
<body>
	<img src="Logo.jpg" alt="Mountain View" style="width:130px;height:39px"><br>
	<div class="navbar">
      <ul class="navbar-item">
        <a href="#"><li>Home</li></a><a href="#"><li>Something</li></a>
      </ul>
    </div>
	<form action ="RA.php" method="POST">
	<h1 class=left>
	ID Request : <input type="text" name="id" />
	<input type="submit" value="Cari"/>
	</h1>
	<table border="1">
	<th>No</th>
	<th>Nama Server</th>
	<th>Organisasi</th>
	<th>Departemen</th>
	<th>Kota</th>
	<th>Provinsi</th>
	<th>Negara</th>
	<th>Key Size</th>
	<th></th>
	<?php
	$user_name = "root";
	$password = "";
	$database = "CA";
	$server = "localhost";
	$db_handle = mysql_connect($server, $user_name, $password);
	$db_found = mysql_select_db($database);
	if (!$db_found) echo "Database NOT Found";
	else {
		$SQL = "SELECT * FROM request where Persetujuan!=1";
		$result = mysql_query($SQL);
		$i=1;
		while ( $db_field = mysql_fetch_assoc($result) ) {
				echo "<tr>";
				echo "<td>" .$i."</td>";
				echo "<td>" . $db_field['Nama_Server'] . "</td>";
				echo "<td>" . $db_field['Organisasi'] . "</td>";
				echo "<td>" . $db_field['Departemen'] . "</td>";
				echo "<td>" . $db_field['Kota'] . "</td>";
				echo "<td>" . $db_field['Provinsi'] . "</td>";
				echo "<td>" . $db_field['Negara'] . "</td>";
				echo "<td>" . $db_field['Key_Size'] . "</td>";
				echo "<td><a href='CA.php' />Menyetujui</td>";
				echo "</tr>";
				$i=$i+1;
				}
		}
	mysql_close($db_handle);
	?>
	</table>
	</form>
	
<body>
</html>