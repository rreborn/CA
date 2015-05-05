<?php
session_start();
if(isset($_GET["dw"]))
	{
		$file = 'D.php';
		if (file_exists($file)) {
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename='.basename($file));
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize($file));
			readfile($file);
			exit;
		}
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
      background: #888888;
    }

  </style>
  <body>
    <div class="navbar">
      <ul class="navbar-item">
        <a href="#"><li>Home</li></a><a href="#"><li>Something</li></a>
      </ul>
    </div>
	<h1 class="center"> Download 
	</h1>
	<form action ="RA.php" method="POST">
    <table border="1">
	<th>No</th>
	<th>ID Request</th>
	<th>Status</th>
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
		$SQL = "SELECT * FROM request where id=1";
		$result = mysql_query($SQL);
		$i=1;
		while ( $db_field = mysql_fetch_assoc($result) ) {
				echo "<tr>";
				echo "<td>" .$i."</td>";
				echo "<td>" . $db_field['id_request'] . "</td>";
				if($db_field['Persetujuan']==1)
					{
						echo "<td>" . "Disetujui" . "</td>";
						echo "<td><a href='Download.php?dw=1' />Download</td>";
					}
				else
					{
						echo "<td>" . "Belum disetujui" . "</td>";
						echo "<td>" . "Tidak Bisa Download" . "</td>";
					}
				echo "</tr>";
				$i=$i+1;
				}
		}
	mysql_close($db_handle);
	?>
	</table>
	
  </body>
</html>