<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>My Site</title>
      <link rel="stylesheet" type="text/css" href="login.css"> 
  </head>
  <body>
    <div>
      <div class="freelancing">
      <h1>Freelancing Tutor</h1>      
    </div>  
    <form class="qsn_typ">
      <div>
        <input type="submit" name="" value="Assignment">
      </div>
      <div>
        <input type="submit" name="" value="Find_Tutor">
      </div>
      <div>
        <input type="submit" name="" value="Question">
      </div>
      <div>
        <input type="submit" name="" value="Project">
      </div>
      <div>
        <input type="submit" name="" value="About">
      </div>
    </form>
    <form class="rec_qsn">
      <div>
        <input type="submit" name="" value="Recent Question">
      </div>
    </form>
    <div class="login">
      <h2>Log in</h2>
      <form method="POST" action="login.php">
        
        <div class="inputBox">
          <input type="text" name="email" required="">
          <label>Email</label>            
        </div>
        <div class="inputBox">
          <input type="password" name="password1" required="">
          
          <label>Password</label>
        </div>
        <input type="submit" name="login" value="Login">
        <h4>Creat a new account</h4>                 
      </form>
      <form action="signup.php">
        <input type="submit" name="" value="Signup">
      </form>
    </div>      
    </div> 

    
    <div class=recent_qsn>
          
        </div>
  <?php 
    session_start();
    $errors = array();     
    $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');
    
    if (isset($_POST['login'])) 
    {
      $Email = $_POST['email'];
      $password = $_POST['password1'];    

        if (!count($errors)) 
        {
          $password = md5($password);
          $query_S = "SELECT * FROM Student WHERE SEmail='$Email' AND SPassword='$password'";
          $query_T = "SELECT * FROM Teacher WHERE TEmail='$Email' AND TPassword='$password'";
          $results = $db->query($query_S);
          $results2 = $db->query($query_T);

          $res=$results->fetch_assoc();
          $res2=$results2->fetch_assoc();
      

        if ($res) 
        {
          $_SESSION['email'] = $Email;
          $_SESSION['success'] = "";
          header('location: page3.php');
        }
        else if ($res2) 
        {
          $_SESSION['email'] = $Email;
          $_SESSION['success'] = "";
          header('location: page7.php');
        }
        else 
        {                 
          echo '
            <div class="wrong">
              <h4>Please enter valid email or password</h4>
            </div>
           ';        
        } 
      }
    }

    echo '
        

    ';


  ?>
  </body>
</html>

