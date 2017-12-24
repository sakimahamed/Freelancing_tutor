
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Freelancing Tutor</title>
      <link rel="stylesheet" type="text/css" href="page11.css"> 
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
        <label class="subject">Assignement Subject: </label>
        <form method="POST" name="myform" action="page11.php">
          <select class="option" name="Subject">
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
            <input type="submit" name="src" value="Accept" >
          </div>
          
        </form>
                  
      </div>        
    </div>
     </div> 

     <div class="prev_qsn">

      <?php 
        $errors = array();    
        $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');
        if(isset($_POST['acc'])){
          $ansid=$_POST['accept'];
          
          $q="UPDATE assignment SET Flag = '1', T_Email = '$mail' WHERE A_Id ='$ansid'";
          $r=$db->query($q);
        }
       if(isset($_POST['src'])) {
        
        $Topic = $_POST['Subject'];
        

        if($Topic=="-----"){
          
          echo '
                <div class="select">
                <p> Please select a topic </p>
                </div>
              ';
        }
        

        $query = "SELECT * from Assignment where A_Subject='$Topic' && Flag='0'";
        $result= $db->query($query);
        $res1=$result->fetch_assoc();
        while($res1){
          echo '
                <div id="inline" >
                  <p>Id: '.$res1["A_Id"].'</p>
                  <p>Assignment: '.$res1["A_Description"].'</p>
                  <p>Subject: '.$res1["A_Subject"].'</p>
                  <p>Email: '.$res1["S_Email"].'</p>
                  <p>Dead_Line: '.$res1["A_Dead_Line"].'</p>
                  <form method="POST" action="page11.php">
                      <button name="acc">Accept</button>
                      <input type="hidden" name = "accept" value='.$res1["A_Id"].'>
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