
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Freelancing Tutor</title>
      <link rel="stylesheet" type="text/css" href="page15.css"> 
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
        <div class="t">
          <?php 
            $errors = array();    
            $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');
            if(isset($_POST['ans2']))
            {
              $a_id=$_POST['qid'];
              $_SESSION['q']=$a_id;
              $query = "SELECT * FROM Assignment WHERE A_Id = '$a_id'";
              $result= $db->query($query);

              $res=$result->fetch_assoc();
            
              echo $res['A_Description'];
            }
            else
            {
              $a_id=$_SESSION['q'];
              $query = "SELECT * FROM Assignment WHERE Q_Id = '$a_id'";
              $result= $db->query($query);

              $res=$result->fetch_assoc();
            
              echo $res['A_Description'];
            }
          ?>
        </div>
        <div class="prev_qsn">
          <?php 
                $errors = array();    
                $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor'); 
                $query1 = "SELECT * FROM Assignment where A_Id='$a_id'";
                $res1 = $db->query($query1);
                $res2= $res1->fetch_assoc();
                if($res2['Flag']==0)
                {
                    echo "Assignment did not checked!!";
                }
                else
                {
                  echo "Your Assignment was checked.. Please contact him/her.";
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