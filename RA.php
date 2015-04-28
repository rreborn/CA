<html>
<head>
	<title>RA</title>
</head>
<body>
	<form action ="RA.php" method="POST">
	ID Request : <input type="text" name="id" />
	<input type="submit" value="Cari"/>
	<table>
	<th>col1</th>
	<th>col2</th>
	<th></th>
	<th></th>
	<?php
		for($i=1; $i<=5 ; $i++)
			{
			 echo "<tr>";
			 for($j=1; $j<=2 ; $j++)
			   {
					echo"<td>isi".$i.".".$j;
					echo "</td>";
			   }
			echo "<td><a href='CA.php' />Edit</td>";
			echo "<td><a href='CA.php' />Delete</td>";
			echo "<td><a href='CA.php' />Menyetujui</td>";
			echo "</tr>";
			}
	?>
	</table>
	</form>
	
<body>
</html>