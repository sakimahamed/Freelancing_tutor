
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Freelancing Tutor</title>
      <link rel="stylesheet" type="text/css" href="about.css"> 
  </head>
  <body>
    <div>
      <div class="freelancing">
        <h1>Freelancing Tutor</h1>      
      </div>
      <div class="sign_out">      
        <form>
          <div class="inputBox">
            <?php 
            session_start();
              $mail= $_SESSION['email'];
              echo '
                <div class="mail">
                  <p>'.$mail.'</p>
                </div>';
          ?>             
          </div>               
        </form>
        <form action="login.php">
          <input type="submit" name="" value="SignOut">
        </form>

      </div> 
      <form class="rec_qsn">
		<h3 style="position: absolute;top: -30px;left: 580px;">Developers</h3>
      <div class="about1">
      	<div>
      		<h6 >Member 1: Shakim Ahamed</h6>
        	<h6 >Id: 011143066</h6>
        	<h6 >Department Name: CSE</h6>
        	<h6 >Database Management System Lab</h6>
        	<h6 >United International University</h6>	
      	</div> 
        
      </div>
    	<div class="P2">
    		
    	</div>
      		
      <div class="about2">
        <div>
        	<h6 >Member 2: Miftahul Janant</h6>
        	<h6 >Id: 011151136</h6>
        	<h6 >Department Name: CSE</h6>
        	<h6 >Database Management System Lab</h6>
        	<h6 >United International University</h6>	
        </div>
        
      </div>
    </form>      
    </div>     
  </body>
</html>