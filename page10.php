
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Freelancing Tutor</title>
      <link rel="stylesheet" type="text/css" href="page10.css"> 
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
    </div> 
     
    <div class="drop_qsn">     
      
        <div class="prev_qsn">
        <form method="POST" action="page9.php"> 
        <div class="textarea">
          <textarea rows="4" cols="70" name="comment"></textarea>
          <button class="ok" name="kk">OK</button>
        </div>
        </form>
    <?php 
        $errors = array();    
        $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');
       if(isset($_POST['kk'])) {
        // session_start();
        // $Topic = $_POST['Subject1'];
      
        $query = "SELECT Q_Id, Q_Description FROM Question  ";
        $result = $db->query($query);
        $res1= $result->fetch_assoc();  
          echo '
                <div id="inline" >
                  <p>Id: '.$res1["Q_Id"].'</p>
                  <p>Question: '.$res1["Q_Description"].'</p>
                </div>
              ';
      }
    
       ?>
      </div>  
          
    </div>


  </body>
</html>