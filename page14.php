
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>My Site</title>
      <link rel="stylesheet" type="text/css" href="page14.css"> 
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
   
    <form method="POST" class="drop_qsn" action="page14.php">
      <div class="topic">
        <h3 >Select topic:</h3>
      </div>
        
        <select class="option" type="Topic" name="Subject">
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
              
            <input type="submit" name="search" value="Search">
            </div> 
      
      
    </form>
        
    </form> 
        
 
 <div class="div">
   <?php 
    $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');
    if(isset($_POST['search'])) {

    $Topic = $_POST['Subject'];

    if($Topic=="-----")
      echo '
            <div class="select">
              <p> Please select a topic </p>
            </div>
            ';

    $query = "SELECT * from Teacher natural join interested_sub WHERE topic='$Topic'";
    $result= $db->query($query);
    $res=$result->fetch_assoc();
    while($res){
      echo '
        <div id="inline">
          <p>Name: '.$res["TFirst_Name"].' '.$res["TLast_Name"].'</p>
          <p>Email: '.$res["TEmail"].'</p>
          <p>Contact No: '.$res["TContact_no"].'</p>
        </div>
      ';

      $res=$result->fetch_assoc();

    }
      
  }
 ?>
 </div>
  </body>
</html>