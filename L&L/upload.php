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

$succ = "success";
$err = "error" ;

$up = "INSERT INTO contact(name,email,mobile,department,year,gender)VALUES('$name','$email','$number','$depart','$year','$gen')";

 $updb = mysqli_query($conn,$up);

if ($updb) {

     $cookie = "user";
     $cvalue = "verified" ; 

     setcookie($cookie,$cvalue,time() + (60),"/");


	?>  
<?php 
echo"hi";

//	header('location:index.php');

}else{

     
     $cookie = "user";
     $cvalue = "unverified" ; 

     setcookie($cookie,$cvalue,time() + (60),"/");
echo"by";
	
   ?>
 
	<?php  
//header('location:index.php');
}
?>
</body>
</html>