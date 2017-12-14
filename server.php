<?php 
	session_start();

	// variable declaration
	
		$Email = $_POST['email'];
		$password = $_POST['password1'];
		$errors = array(); 
		$_SESSION['success'] = "";
	    $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');

	// signup USER
	if (isset($_POST['Signup_as_Student'])) {
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
	if (isset($_POST['login'])) {
		$Email = $_POST['email'];
		$password = $_POST['password1'];

		if (count($errors) == 0) {
			$password = md5($password);
			$query_S = "SELECT * FROM Student WHERE Email='$Email' AND password='$password'";
			$query_T = "SELECT * FROM Teacher WHERE Email='$Email' AND password='$password'";
			$results = mysqli_query($db, $query_S);
			$results2 = mysqli_query($db, $query_T);

			if (mysqli_num_rows($results) == 0) {
				$_SESSION['email'] = $Email;
				$_SESSION['success'] = "You are now logged in";
				header('location: page3.php');
			}
			if (mysqli_num_rows($results2) == 0) {
				$_SESSION['email'] = $Email;
				$_SESSION['success'] = "You are now logged in";
				header('location: page7.php');
			}
			else 
			{
				array_push($errors, "Wrong username/password combination");
				echo "Wrong";
				
			}
		}
	}

?>