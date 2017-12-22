
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
      <title>Freelancing Tutor</title>
      <link rel="stylesheet" type="text/css" href="page4.css"> 
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
              </div>
            ';
          ?>          
        </div>               
      </form>
      <form action="login.php">
        <input type="submit" name="" value="SignOut">
      </form>      
    </div> 
    <form method="POST" action="server.php">
    <div class="drop_qsn">
      <div>
        <font size="7">Drop Your Question</font> 
      </div>
      
        <div class="inputBox">
          <label class="subject">Subject: </label>
          <select class="option" id="Subject" name="Subject">
            <option value="Mathematics">Mathematics</option>
            <option value="C_Programming">C_Programming</option>
            <option value="Java">Java</option>
            <option value="Python">Python</option>
            <option value="C++">C++</option>
            <option value="English">English</option>
            <option value="Accounting">Accounting</option>
            <option value="Physics">Physics</option>
          </select>           
        </div> 
        <div class="description_Box">
          <label>Description:</label>  
          <textarea rows="14" cols="115" name="comment"></textarea>
          <input type="submit" name="submit" value="Done">       
        </div> 
      
    </div> 
    </form>            
  </div> 
</body>
</html>

