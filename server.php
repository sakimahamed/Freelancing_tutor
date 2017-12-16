<?php 
	

	// variable declaration
	
		
		$errors = array(); 
		
	    $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');

	// signup USER
	if (isset($_POST['Signup_as_Student'])) {

		$Email = $_POST['email'];
		$password = $_POST['password1'];
		
		

		$Firstname =  $_POST['firstname'];
		$Lastname = $_POST['lastname'];
		$date = $_POST['Date'];
		$mobile_no = $_POST['mobile_no'];
		$gender = $_POST['Gender'];

		$password = md5($password);//encrypt the password before saving in the database
		$query = "INSERT INTO Student
				VALUES('$Firstname','$Lastname', '$Email','$password','$date','$mobile_no','$gender')";
		$result= mysqli_query($db,$query);
		header('location: signup.php');

			
	}
	if (isset($_POST['Signup_as_Teacher'])) {

		$Email = $_POST['email'];
		$password = $_POST['password1'];
		 
		$_SESSION['success'] = "";

		$Firstname =  $_POST['firstname'];
		$Lastname = $_POST['lastname'];
		$date = $_POST['Date'];
		$mobile_no = $_POST['mobile_no'];
		$gender = $_POST['Gender'];

		$password = md5($password);//encrypt the password before saving in the database
		$query = "INSERT INTO Teacher
				VALUES('$Firstname','$Lastname', '$Email','$password','$date','$mobile_no','$gender')";
		$result= mysqli_query($db,$query);
		header('location: t_interested_sub.php');

			
	}
	if (isset($_POST['Done'])) {
		$Email = $_POST['email'];

		$query = "INSERT INTO t_interested_sub
				VALUES(''$Email',)";
		$result= mysqli_query($db,$query);
		header('location: signup.php');		
	}
	// LOGIN USER
	
	
	
	



?>