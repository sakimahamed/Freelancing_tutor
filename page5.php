
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
      <title>My Site</title>
      <link rel="stylesheet" type="text/css" href="page5.css"> 
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
    <form method="POST">
    <div class="drop_qsn">
      <div>
        <font size="7">Drop Your Assignment</font> 
      </div>
      
      <div class="inputBox">
          <label class="subject">Subject: </label>
            <select class="option" name="Subject">
              <option>Mathematics</option>
              <option>C_Programming</option>
              <option>Java</option>
              <option>Python</option>
              <option>C++</option>
              <option>English</option>
              <option>Accounting</option>
              <option>Physics</option>
            </select>           
        </div> 
        <div class="description_Box">
          <label>Description:</label>  
          <textarea rows="14" cols="115" name="comment" form="usrform"></textarea>

          <div class="inputBox">
            <label>Dead_Line:</label>
            <input type="Date" name="date" required="">
          </div>              
          <input type="submit" name="" value="Done">      
        </div>
      </div>
      </form>
    </div> 
    <?php 
      $errors = array(); 

      $db = mysqli_connect('localhost', 'root', '', 'freelancing_tutor');

      if (isset($_POST['done'])) {
     
      
      $A_description = $_POST['comment'];
      $A_sub = $_POST['Subject'];
      $A_daed_line = $_POST['date'];
      
    $query = "INSERT INTO assignment
        VALUES('',$A_description','$A_sub','$A_daed_line')";
    $result = $db->query($query);
    header('location: page5.php');
     
  }
    ?>



  </body>
</html>