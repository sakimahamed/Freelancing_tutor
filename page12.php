
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Freelancing Tutor</title>
      <link rel="stylesheet" type="text/css" href="page12.css"> 
  </head>
  <body>
    <div>
      <div class="freelancing">
      <h1>Freelancing Tutor</h1>      
    </div>
    <div >
            
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
    </div>  
    <div class="drop_qsn">     
      <div class="inputBox">
        <form name="myform" action="page3.php">
          <input type="submit" value="Back">
        </form>           
      </div>        
    </div>         
  </body>
</html>