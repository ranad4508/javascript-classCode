<?php
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$a = $_FILES["image"]["name"];
		$conn=mysqli_connect('localhost','root','','db_studentinfo');
		// Check connection
		if (!$conn) {
    	die("Connection failed: ".mysqli_connect_errno() );
			}
		$sql = "INSERT INTO student(name,address,email,image)
		VALUES ('$name', '$address','$email','$a')";
		if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
		} 
		else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
		
	// }
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
		Name:<input type="text" name="name">
		<br>
		Address:<input type="text" name="address">
		<br>
		Email:<input type="text" name="email">
		<br>
		Image:<input type="file" name="image">
		<br>
		<input type="submit" name="submit">
	</form>


</body>
</html>