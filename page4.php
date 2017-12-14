
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
      <title>My Site</title>
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
          <input type="text" name="" required="">
          <label>Email</label>            
        </div>               
      </form>
      <form action="login.php">
        <input type="submit" name="" value="SignOut">
      </form>      
    </div> 
    <form action="page3.php">
    <div class="drop_qsn">
      <div>
        <font size="7">Drop Your Question</font> 
      </div>
        <div class="inputBox">
          <label class="subject">Subject: </label>
            <select class="option" name="Subject">
              <option>Math</option>
              <option>English</option>
              <option>Python</option>
              <option>C</option>
              <option>Java</option>
            </select>           
        </div> 
        <div class="description_Box">
          <label>Description:</label>  
            <textarea rows="14" cols="115" name="comment" form="usrform"></textarea>
            <input type="submit" name="" value="Done">       
        </div>
        
      </div>
      </form>             
    </div> 
  </body>
</html>