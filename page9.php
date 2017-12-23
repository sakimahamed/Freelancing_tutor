
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Freelancing Tutor</title>
      <link rel="stylesheet" type="text/css" href="page9.css"> 
  </head>
  <body>
   
      <div class="freelancing">
        <h1>Freelancing Tutor</h1>      
      </div>
      <div class="qsn_typ">
        <form action="page11.php">
          <input type="submit" name="" value="Assignment">
        </form>
        <form action="page9.php">
          <input type="submit" name="done1" value="Question">
        </form>
        <form action="page13.php">
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
      <div class="drop_qsn">     
      <div class="inputBox">
        <label class="subject">Question Subject: </label>
        <form method="POST" name="myform" action="page9.php">
         <select class="option" type="Topic" name="Subject1">
            <option>-----</option>  
            <option>Mathematics</option>
              <option>C_Programming</option>
              <option>Java</option>
              <option>Python</option>
              <option>C++</option>
              <option>English</option>
              <option>Accounting</option>
              <option>Physics</option>
          </select>
          <div class="search">
             <input type="submit" name="src" value="Search">

          </div>
        </form>  
      </div>        
    </div>
    <div class="prev_qsn">

      <?php 
        $errors = array();    
        $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');
       if(isset($_POST['src'])) {
        
        $Topic = $_POST['Subject1'];
        
        
        if($Topic=="-----"){
          
          echo '
                <div class="select">
                <p> Please select a topic </p>
                </div>
              ';
        }
        
        $query = "SELECT * from Question where Q_Subject='$Topic'";
        
        $result= $db->query($query);
        $res1=$result->fetch_assoc();

        while($res1){
          $q_id=$res1["Q_Id"];
          echo '
                <div id="inline">
                  <p>Id: '.$res1["Q_Id"].'</p>
                  <p>Question: '.$res1["Q_Description"].'</p>
                  <p>Subject: '.$res1["Q_Subject"].'</p>
                  <p>Email: '.$res1["S_Email"].'</p>
                  <form method="POST" action="page10.php">
                      <button name="ans">Answer</button>
                      <input type="hidden" name = "qid" value='.$q_id.'>
                  </form>
                </div>
              ';
        $res1=$result->fetch_assoc();
      }
    }
  ?>

    </div>       
  </body>
</html>