<?php
	//$errUsername=$errPassword='';
	if (isset($_POST['submit'])) {
		//$firstname = $_POST['firstname'];
		//$lastname = $_POST['lastname'];
		//$email = $_POST['email'];
		//$image="";
		$target_dir = "binfourthb/";
		$a = $_FILES["image"]["name"];
		$target_file = $target_dir . $a;
		if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
			// $image=$_FILES['image']['name'];
			echo "success";
		}

		if (empty($firstname) && empty($lastname)&& empty($email)) {
			$errUsername = "username should not be empty";
			$errPassword = "Password should not be empty";
		}
		else{
		// Create connection
		$conn=mysqli_connect('localhost','root','','shikha');
		// Check connection
		if (!$conn) {
    	die("Connection failed: ".mysqli_connect_errno() );
			}
		$sql = "INSERT INTO myguests(firstname,lastname,email,image)
		VALUES ('$firstname', '$lastname','$email','$a')";
		if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
		} 
		else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Data Into Form</title>
	<style type="text/css">
		.error{
			color: red;
			display: block;
		}
	</style>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
		<label>First Name</label>
		<input type="text" name="firstname">
		<br>
		<br>
		<label>Last Name</label>
		<input type="text" name="lastname">
		<br>
		<br>
		<label>Email</label>
		<input type="text" name="email">
		<br>
		<br>
		<label>Image</label>
		<input type="file" name="image">
		
		<br>
		<br>
		<input type="submit" name="submit">
	</form>


</body>
</html>