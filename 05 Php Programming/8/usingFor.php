<html>
<head>
<title>For Loop</title>
</head>
<body>
<h1>For</h1>
<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($i=1; $i <= 10; $i++) 
	{ 
		echo "<tr> \n";
		
		for ($j=1; $j <= 5; $j++) 
		{ 
		   $p = $j * $i;
		   echo "<td>$p</td> \n";
		}
	  	echo "</tr>";
	}
echo "</table>";
?>

</body>
</html>