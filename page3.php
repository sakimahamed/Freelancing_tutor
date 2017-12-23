
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Freelancing Tutor</title>
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
        <form method="POST" action="page3.php" class="work" >
          <input type="submit" name="done" value="Assignment">
        </form>
        <form method="POST" action="page3.php" class="work1" >
          <input type="submit" name="done1" value="Question">
        </form>
        <form method="POST" action="page3.php" class="work2" >
          <input type="submit" name="done2" value="Project">
        </form>
      </div>      
    </div> 
    <div class=prev_qsn> 
    <?php 
      $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');
      if(isset($_POST['done1'])) 
      {
        $mail1= $_SESSION['email'];
        $query = "SELECT * FROM Question where S_Email='$mail1' ";
        $result= $db->query($query);
        $res=$result->fetch_assoc();
        while($res)
        {
          echo '
          <div id="inline">
            <p>Id: '.$res["Q_Id"].'</p>
            <p>Question: '.$res["Q_Description"].'</p>
            <p>Subject:  '.$res["Q_Subject"].'</p>
            <p>Email: '.$res["S_Email"].'</p>
            <form method="POST" action="page10.php">
                      <button name="ans">Answer</button>
                      <input type="hidden" name = "qid" value='.$q_id.'>
                  </form>
          </div>
          ';
          $res=$result->fetch_assoc();
        }
      }
    ?>

    <?php 
      $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');
      if(isset($_POST['done'])) 
      {
        $mail1= $_SESSION['email'];
        $query = "SELECT * FROM Assignment where S_Email='$mail1' ";
        $result= $db->query($query);
        $res=$result->fetch_assoc();
        while($res)
        {
          echo '
          <div id="inline">
            <p>Id: '.$res["A_Id"].'</p>
            <p>Assignment: '.$res["A_Description"].'</p>
            <p>Subject:  '.$res["A_Subject"].'</p>
            <p>Email: '.$res["S_Email"].'</p>
            <p>Dead_Line:  '.$res["A_Dead_Line"].'</p>
            <form method="POST" action="page10.php">
                      <button name="ans">View</button>
                      <input type="hidden" name = "qid" value='.$q_id.'>
                  </form>
          </div>
          ';
          $res=$result->fetch_assoc();
        }
      }
    ?>   


    <?php 
      $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');
      if(isset($_POST['done2'])) 
      {
        $mail1= $_SESSION['email'];
        $query = "SELECT * FROM Project where S_Email='$mail1' ";
        $result= $db->query($query);
        $res=$result->fetch_assoc();
        while($res)
        {
          echo '
          <div id="inline">
            <p>Id: '.$res["P_Id"].'</p>
            <p>Project: '.$res["P_Description"].'</p>
            <p>Subject:  '.$res["P_Subject"].'</p>
            <p>Email: '.$res["S_Email"].'</p>
            <p>Dead_Line:  '.$res["P_Dead_Line"].'</p>
            <form method="POST" action="page10.php">
                      <button name="ans">View</button>
                      <input type="hidden" name = "qid" value='.$q_id.'>
                  </form>
          </div>
          ';
          $res=$result->fetch_assoc();
        }
      }
    ?>   



    </div>    
  </body>
</html>