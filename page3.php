<?php
session_start();
?>
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>My Site</title>
      <link rel="stylesheet" type="text/css" href="page3.css"> 
  </head>
  <body>
    <div>
      <div class="freelancing">
        <h1>Freelancing Tutor</h1>      
      </div>
      <div class="qsn_typ">
        <form action="page5.php">
          <input type="submit" name="" value="Assignment">
        </form>
        <form action="page14.php">
          <input type="submit" name="" value="Find_Tutor">
        </form>
        <form action="page4.php">
          <input type="submit" name="" value="Question">
        </form>
        <form action="page6.php">
          <input type="submit" name="" value="Project">
        </form>
        <form action="about.php">
          <input type="submit" name="" value="About">
        </form>      
      </div>
      <form class="prev_Work">
        <div>
          <input type="submit" name="" value="Previous Work">
        </div>
      </form>
    
      <div class="sign_out">      
        <form>        
          <div class="inputBox">
            <?php
                $Email=$_SESSION['email'];
            ?>
            <input type="text" name="" value=$Email required="">
            <label>Email</label>            
          </div>               
        </form>
        <form action="login.php">
          <input type="submit" name="" value="SignOut">
        </form>
        <div class="description_Box">  
          <textarea rows="14" cols="105" name="comment" form="usrform"></textarea>       
        </div>
      </div>      
    </div>     
  </body>
</html>