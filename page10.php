
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
      <form action="page9.php">
        <button class="ok1">Back</button>
      </form>           
      <form method="POST" action="page10.php"> 
        <div class="textarea">
          <textarea rows="3" cols="70" name="comment"></textarea>
          <button class="ok" name="kk">OK</button>
        </div>
      </form>
          <div class="">
           <?php
              $errors = array();    
              $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');
              if(isset($_POST['kk'])) 
              {
                $q_id=$_SESSION['q'];
                $mail= $_SESSION['email'];
                
                $Ans_Description =mysql_real_escape_string($_POST['comment']);

                if($Ans_Description==""){

                }
                else{
                  $q2 = "INSERT INTO answer
                        VALUES('$q_id','','$Ans_Description','$mail')";
                  $result = $db->query($q2);
                }
              }
            ?> 
          </div>  
        <div class="t">
          <?php 
            $errors = array();    
            $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');
            if(isset($_POST['ans'])){
            $q_id=$_POST['qid'];
            $_SESSION['q']=$q_id;
            $query = "SELECT * FROM Question WHERE Q_Id = '$q_id'";
            $result= $db->query($query);

            $res=$result->fetch_assoc();
          
            echo $res['Q_Description'];
            }
            else{
            $q_id=$_SESSION['q'];
            $query = "SELECT * FROM Question WHERE Q_Id = '$q_id'";
            $result= $db->query($query);

            $res=$result->fetch_assoc();
          
            echo $res['Q_Description'];
           }
          ?>
        </div>
      </div>
     
    <div class="prev_qsn">
          <?php 
                $errors = array();    
                $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor'); 
                $query1 = "SELECT * FROM answer where Q_Id='$q_id'";
                $res1 = $db->query($query1);
                $res2= $res1->fetch_assoc();

                while ($res2) 
                {
                  $email=$res2['T_Email'];
                  $q="SELECT * FROM teacher where TEmail='$email'";
                  $r1=$db->query($q);
                  $r2=$r1->fetch_assoc();
                  $first_name=$r2['TFirst_Name'];
                  $last_name=$r2['TLast_Name'];
                  echo '
                    <div id="inline">
                      
                      <p style="color:#03a9f4;">'.$first_name.'&nbsp</p>
                      <p style="color:#03a9f4;">'.$last_name.'&nbsp</p>
                      <p>'.$res2['Ans_Description'].'</p>
                    </div>
                  ';
                  $res2= $res1->fetch_assoc();
                }
            ?>
        </div>


  </body>
</html>