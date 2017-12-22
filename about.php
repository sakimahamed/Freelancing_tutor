
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
      <div>
        <h4>This software is made for any student who had no helping hand.
           If anyone want some tutor from any corner of country,he/she can
          choose his/her desirable tutor. </h4>
      </div>
    </form>      
    </div>     
  </body>
</html>