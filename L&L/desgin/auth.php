<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<?php

include('connection.php');



  // $user= "parth";
  //   $pass ="part7656h";
  //   $role = "valuer";


    $user= $_POST['user'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];


    switch ($role) {	
    	case "principal":
    	
    	$up= "INSERT INTO principal_coe(user,pass,role)VALUES('$user','$pass','$role')";
    	$updb = mysqli_query($conn,$up);

    		break;
    	case "coe":
    	
    	$up= "INSERT INTO principal_coe(user,pass,role)VALUES('$user','$pass','$role')";
    	$updb = mysqli_query($conn,$up);

    	break;
    	
    		case "moderator":
    	
    	$up= "INSERT INTO moderator(user,pass,role)VALUES('$user','$pass','$role')";
    	$updb = mysqli_query($conn,$up);
   break;

	case "valuer":
    	
    	$up= "INSERT INTO valuer(user,pass,role)VALUES('$user','$pass','$role')";
    	$updb = mysqli_query($conn,$up);
    	break;

    	default:
    		?>
    		<script >
    			alert("Sorry select the role");
    		</script>

    		<?php
    		break;
    }
   




	 ?>

</body>
</html>
