<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>My Site</title>
      <link rel="stylesheet" type="text/css" href="signup.css"> 
 </head>
<body>
	<div class="signup">
		<h2>Signup</h2>
		<form method="POST" action="server.php">
         
      
          <div class="inputBox">
            <input type="text" name="firstname" required="" value="">
            <label>FirstName</label>           
          </div>
          <div class="inputBox">
            <input type="text" name="lastname" required="" value="">
            <label>LastName</label>           
          </div>
          <div class="inputBox">
            <input type="email" name="email" required="" value="">
            <label>Email</label>           
          </div>
          <div class="inputBox">
            <input type="Password" name="password1" required="" value="">
            <label>Password</label>           
          </div>
          <div class="inputBox">
            <input type="date" name="Date" required="">
            <label class="t">Date of Birth</label>           
          </div>	
          <div class="inputBox">
            <input type="text" name="mobile_no" required="">
            <label>Contact_No</label>           
          </div>
          <div class="gender">
          	<label>Gender :</label>
            male<input type="radio" name="Gender" value="Male">
            female<input type="radio" name="Gender" value="Female"> 
            
          </div>           
          <input type="submit" name="Signup_as_Student" value="Signup_as_Student">
          
          <form action="t_interested_sub.php">
            <input type="submit" name="Signup_as_Teacher" value="Signup_as_Teacher">
          </form>
          
          <div class="member">
            <label>
              Already A member? <a href="login.php"><button>LogIn</button></a>
            </label>   
          </div>
      </form>                        
        
	</div>

</body>
</html>