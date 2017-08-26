<html>
<head>
<title>While Loop</title>
</head>
<body>
<h1>While</h1>
<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
	$i=1;
	while($i <= 10) 
	{ 
		echo "<tr> \n";
		$j=1;
		while($j <= 5) 
		{ 
		   $p = $j * $i;
		   echo "<td>$p</td> \n";
		   $j++;
		}
	  	echo "</tr>";
		$i++;
	}
echo "</table>";
?>

</body>
</html>