<?php 

	// variable declaration	

	$errors = array(); 		
    $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');

	// signup student
	if (isset($_POST['Signup_as_Student'])) 
	{

		$Email = $_POST['email'];

    session_start();
    $_SESSION['email']=$Email;

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


	// signup teacher
	if (isset($_POST['Signup_as_Teacher'])) 
	{

		$Email = $_POST['email'];
		$password = $_POST['password1'];
        session_start();
        $_SESSION['email']=$Email;  
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


	//For teachers interested topic
    if (isset($_POST['done'])) 
    {
      session_start();
      $Email = $_SESSION['email'];

      $Topic = $_POST['Subject'];

      for($i=0;$i<count($Topic);$i++)
      {     	
      	$query = "INSERT INTO interested_sub
        VALUES('$Email','$Topic[$i]')";
        $result = $db->query($query); 
      }    
    	header('location: signup.php');    
  	}


  	//For student question
  	if (isset($_POST['submit'])) 
  	{
      $Q_description =mysql_real_escape_string($_POST['comment']);
      if($Q_description=="")
      {
          header('location: page4.php');
      }
      else {

        session_start();
      $Email = $_SESSION['email'];
      $Q_sub = mysql_real_escape_string($_POST['Subject']);
      $Q_description =mysql_real_escape_string($_POST['comment']);
      $query = "INSERT INTO question
        VALUES('','$Q_description','$Q_sub','$Email')";
      $result = $db->query($query);
       header('location: page3.php');
      }
      
  	}

  	//For student assignment
  	if (isset($_POST['submit1'])) 
  	{


      $A_description =mysql_real_escape_string($_POST['comment']);
      if ($A_description=="")
      {
          header('location: page5.php');
      }
      else
      {
        session_start();
      $Email = $_SESSION['email'];
      $A_sub = mysql_real_escape_string($_POST['Subject']);
      $A_description =mysql_real_escape_string($_POST['comment']);
      $A_Dead_line = mysql_real_escape_string($_POST['date']);
      $query = "INSERT INTO assignment
        VALUES('','$A_description','$A_sub','$Email','$A_Dead_line','','')";
      $result = $db->query($query);
       header('location: page3.php');
      }
      
  	}


  	//For student project
  	if (isset($_POST['submit2'])) 
  	{
      $P_description =mysql_real_escape_string($_POST['comment']);
      if ($P_description==""){
        header('location: page6.php');
      }
      else
      {
        $P_sub = mysql_real_escape_string($_POST['Subject']);
      $P_description =mysql_real_escape_string($_POST['comment']);
      $P_Dead_line = mysql_real_escape_string($_POST['date']);
      session_start();
      $Email=$_SESSION['email'];
      
      $query = "INSERT INTO project
        VALUES('','$P_description','$P_sub','$Email','$P_Dead_line','','')";
      $result = $db->query($query);
       header('location: page3.php');
      }
      
  	}





    // if(isset($_POST['kk'])) 
    //         {
    //           $q_id=$_SESSION['q'];
    //           $mail= $_SESSION['email'];
              
    //           $Ans_Description =mysql_real_escape_string($_POST['comment']);

    //           if($Ans_Description==""){

    //           }
    //           else{
    //             $q2 = "INSERT INTO answer
    //                   VALUES('$q_id','','$Ans_Description','','$mail')";
    //             $result = $db->query($q2);
    //           }
    //           header('location: page10.php');
    //         }

   
?>