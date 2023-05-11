<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php
include 'database.php';

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'] ; 
$depart = $_POST['depart'];
$year = $_POST['year'] ; 
$gen = $_POST['gender'] ; 
 
echo $name;

$succ = "success";
$err = "error" ;

$fid = "SELECT id FROM contact ORDER BY DESC LIMIT 1";
$cid = mysqli_query($conn,$up);

while ($vl = mysqli_fetch_array($cid)) {
	$value = $vl['id'];
	echo "hi";

}
$newid = $value+1 ;


 $up = "INSERT INTO contact(id,name,email,mobile,department,year,gender)VALUES('$newid','$name','$email','$number','$depart','$year','$gen')";

//$up = "INSERT INTO contact(name,email,mobile,department,year,gender)VALUES($name,$email,$number,$depart,$year,$gen)";

 $updb = mysqli_query($conn,$up);

if ($updb) {

     $cookie = "user";
     $cvalue = "verified" ; 

     setcookie($cookie,$cvalue,time() + (60),"/");


	?>  
	
<?php 
	header('location:index.php');
}else{

     
     $cookie = "user";
     $cvalue = "unverified" ; 

     setcookie($cookie,$cvalue,time() + (60),"/");

	
   ?>
 
	<?php  
header('location:index.php');
}
?>
</body>
</html>