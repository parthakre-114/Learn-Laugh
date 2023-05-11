<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 

include('connection.php');


?>

<br>
<?php 


  // $user= "parth";
  //   $pass ="part14";
  //   $role = "valuer";


    $user= $_POST['user'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];




$fet = "SELECT * FROM $role WHERE user= '$user' ";

if ($fetup= $conn->query($fet)) {
	if ($row = $fetup -> fetch_array(MYSQLI_ASSOC)) {

		//echo $row['user'];
           $dbpass = $row['pass'];
		if ($pass == $dbpass ) {
		 	?>
<script type="text/javascript">
	alert("Login Succesful");

</script>
		 	<?php
		 	header('location:home.php');
		 }else{
		 	?>

<script type="text/javascript">
	alert("Invalid Credentials");

</script>
<?php 
		 	}

		
	}else{
	?>
<script type="text/javascript">
	alert("Invalid Username.Please Signup if you don't have a account");

</script>
<?php 
}
	// code...
}
// $get = mysqli_fetch_array($fetup);


?>


</body>
</html>