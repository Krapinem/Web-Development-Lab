<?php

	
	$name=$_POST['first_name']." ".$_POST['last_name'];
    $age=$_POST['age'];
   
	$conn = mysqli_connect("localhost", "root", "root", "myDB");
   
    $query="insert into `register` values ('".$name."','".$age."');";
    
    $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
    
    echo "executed";







?>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <title>Welcome</title>
    <link rel="icon" type="image/png" href="/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
</head>
<body>

    <div class="flexbox animated fadeIn">
        <div class="content">
		<table>
<?php

$conn = mysqli_connect("localhost", "root", "root", "myDB");

$result = mysqli_query($conn,"SELECT * FROM Register");

while($rs=mysqli_fetch_assoc($result)){
	echo '<tr><td>'.$rs["name"].'</td>';
	echo '<td>'.$rs["age"].'</td></tr>';
}
mysqli_close($conn);



?>
<table>
 </div>
    </div>

</body>
</html>