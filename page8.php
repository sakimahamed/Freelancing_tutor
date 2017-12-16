
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>My Site</title>
      <link rel="stylesheet" type="text/css" href="page8.css"> 
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
    <script type="text/javascript">
      function show(f) 
      {
        var x = f.Subject;
        alert(x.value);
      }
    </script> 
    <div class="drop_qsn">     
      <div class="inputBox">
        <label class="subject">Subject: </label>
        <form action="page9.php" name="myform">
          <select class="option" name="Subject">
            <option>Mathematics</option>
              <option>C_Programming</option>
              <option>Java</option>
              <option>Python</option>
              <option>C++</option>
              <option>English</option>
              <option>Accounting</option>
              <option>Physics</option>
          </select>
          <input type="submit" value="Done" onclick="show(myform)">
        </form>           
      </div>        
    </div>     
  </body>
</html>