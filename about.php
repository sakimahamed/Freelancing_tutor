
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
		<h3 style="position: absolute;top: -30px;left: 595px;">Developers</h3>
      <div class="about1">
      	<div>
      		<h5 style="font-size: 21px;">Member 1: Shakim Ahamed<br><br>Id: 011143066<br><br>Department Name: CSE<br><br>Gmail:sahamed143066@bscse.uiu.ac.bd<br><br>Database Management System Lab<br><br>United International University</h5>
      	</div> 
        
      </div>
    	<div class="P2">
    		
    	</div>
      		
      <div class="about2">
        <div>
        	<h5 style="font-size: 21px;">Member 2: Miftahul Jannat<br><br>Id: 011151136<br><br>Department Name: CSE<br><br>Gmail:mjannat151136@bscse.uiu.ac.bd<br><br>Database Management System Lab<br><br>United International University</h5>	
        </div>
        
      </div>
    </form>      
    </div>     
  </body>
</html>