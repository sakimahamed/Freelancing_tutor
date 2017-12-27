
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Freelancing Tutor</title>
      <link rel="stylesheet" type="text/css" href="page16.css"> 
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
      <div class="inputBox">
        <form name="myform" action="page3.php">
          <input type="submit" value="Back">
        </form>
        <div class="t">
          <?php 
            $errors = array();    
            $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');
            if(isset($_POST['ans3']))
            {
              $p_id=$_POST['qid'];
              $_SESSION['q']=$p_id;
              $query = "SELECT * FROM Project WHERE P_Id = '$p_id'";
              $result= $db->query($query);

              $res=$result->fetch_assoc();
            
              echo $res['P_Description'];
            }
            else
            {
              $p_id=$_SESSION['q'];
              $query = "SELECT * FROM Project WHERE P_Id = '$p_id'";
              $result= $db->query($query);

              $res=$result->fetch_assoc();
            
              echo $res['P_Description'];
            }
          ?>
        </div>
        <div class="prev_qsn">
          <?php 
                $errors = array();    
                $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor'); 
                $query1 = "SELECT * FROM Project where P_Id='$p_id'";
                $res1 = $db->query($query1);
                $res2= $res1->fetch_assoc();
                if($res2['Flag']==0)
                {
                  echo "Project did not checked!!";
                }
                else
                {
                  echo "Your Project was checked..Please contact him/her."; 
                  $email=$res2['T_Email'];
                  $q="SELECT * FROM teacher where TEmail='$email'";
                  $r1=$db->query($q);
                  $r2=$r1->fetch_assoc();
                  $first_name=$r2['TFirst_Name'];
                  $last_name=$r2['TLast_Name'];
                  $temail=$r2['TEmail'];
                  $contact=$r2['TContact_no'];
                  echo '
                    <div id="inline">
                      <p>Name:</p>
                      <p style="color:#03a9f4;">'.$first_name.'&nbsp</p>
                      <p style="color:#03a9f4;">'.$last_name.'&nbsp</p>
                      <p>Email:</p>
                      <p style="color:#03a9f4;">'.$temail.'&nbsp</p>
                      <p>Contact_no:</p>
                      <p style="color:#03a9f4;">'.$contact.'&nbsp</p>
                    </div>
                  ';
                  $res2= $res1->fetch_assoc();
                }
            ?>
        </div>   
      </div>
  </body>
</html>