
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Freelancing Tutor</title>
      <link rel="stylesheet" type="text/css" href="page7.css"> 
  </head>
  <body>
    <div>
      <div class="freelancing">
      <h1>Freelancing Tutor</h1>      
    </div>
    <div class="qsn_typ">
        <form action="page11.php">
          <input type="submit" name="" value="Assignment">
        </form>
        <form action="page9.php">
          <input type="submit" name="" value="Question">
        </form>
        <form action="page13.php">
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
      <form method="POST" action="page7.php" class="work" >
        <input type="submit" name="done" value="Assignment">
      </form>
      <form method="POST" action="page7.php" class="work1" >
        <input type="submit" name="done1" value="Question">
      </form>
      <form method="POST" action="page7.php" class="work2" >
        <input type="submit" name="done2" value="Project">
      </form>
    </div>      
    </div> 
    <div class="prev_qsn">
      <?php 
      $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');
      if(isset($_POST['done'])) 
      {
        $mail= $_SESSION['email'];
        $query = "SELECT * FROM Assignment where T_Email='$mail' ";
        $result= $db->query($query);
        $res=$result->fetch_assoc();
        while($res)
        {
          
          echo '
          <div id="inline">
            <p>Id:</p>
            <p style="color:#03a9f4;">'.$res["A_Id"].'&nbsp</p>
            <p>Assignment:</p>
            <p style="color:#03a9f4;">'.$res["A_Description"].'&nbsp</p>
            <p>Subject:</p>
            <p style="color:#03a9f4;">'.$res["A_Subject"].'&nbsp</p>
            <p>Email:</p>
            <p style="color:#03a9f4;">'.$res["S_Email"].'&nbsp</p>
            <p>Dead_Line:</p>
            <p style="color:#03a9f4;">'.$res["A_Dead_Line"].'&nbsp</p>
            
          </div>
          ';
          $res=$result->fetch_assoc();
        }
      }
    ?>

    <?php 
      $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');
      if(isset($_POST['done1'])) 
      {
        $mail1= $_SESSION['email'];
        $query = "SELECT * FROM Answer where T_Email='$mail1'";
        $result= $db->query($query);
        $res2=$result->fetch_assoc();
        while($res2)
        {
          $q_d=$res2['Q_Id'];
          $q="SELECT * FROM Question where Q_Id='$q_d'";
          $r1=$db->query($q);
          $r2=$r1->fetch_assoc();
       
          echo '
          <div id="inline">
            <p>Id:</p>
            <p style="color:#03a9f4;">'.$r2["Q_Id"].'&nbsp&nbsp</p>
            <p>Question:</p>
            <p style="color:#03a9f4;">'.$r2["Q_Description"].'&nbsp&nbsp</p>
            <p>Subject:</p>
            <p style="color:#03a9f4;">'.$r2["Q_Subject"].'&nbsp&nbsp</p>
            <p>Email:</p>
            <p style="color:#03a9f4;">'.$r2["S_Email"].'&nbsp&nbsp</p>
          </div>
          ';
          $res2=$result->fetch_assoc();
        }
      }
    ?>

    <?php 
      $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');
      if(isset($_POST['done2'])) 
      {
        $mail1= $_SESSION['email'];
        $query = "SELECT * FROM Project where T_Email='$mail1' ";
        $result= $db->query($query);
        $res=$result->fetch_assoc();
        while($res)
        {
          echo '
          <div id="inline">
            <p>Id:</p>
            <p style="color:#03a9f4;">'.$res["P_Id"].'&nbsp&nbsp</p>
            <p>Project:</p>
            <p style="color:#03a9f4;">'.$res["P_Description"].'&nbsp&nbsp</p>
            <p>Subject:</p>
            <p style="color:#03a9f4;">'.$res["P_Subject"].'&nbsp&nbsp</p>
            <p>Email:</p>
            <p style="color:#03a9f4;">'.$res["S_Email"].'&nbsp&nbsp</p>
            <p>Dead_Line:</p>
            <p style="color:#03a9f4;">'.$res["P_Dead_Line"].'&nbsp&nbsp</p>
          </div>
          ';
          $res=$result->fetch_assoc();
        }
      }
    ?>     
    </div>    
  </body>
</html>