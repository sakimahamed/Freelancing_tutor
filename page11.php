
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>My Site</title>
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
            <input type="text" name="" required="">
            <label>Email</label>            
          </div>               
        </form>
        <form action="login.php">
          <input type="submit" name="" value="SignOut">
        </form>
      </div>      
   
      <form action="page7.php">
    <div class="drop_qsn">     
      <div class="inputBox">
        <label class="subject">Subject: </label>
        <form name="myform">
          <select class="option" name="Subject">
            <option>Math</option>
            <option>English</option>
            <option>Python</option>
            <option>C</option>
            <option>Java</option>
          </select>
          <input type="submit" value="Accept" onclick="show(myform)">
        </form>
        <div>
          <label class="qsn">Assignment=></label>
          <textarea class="description_Box" rows="14" cols="20" name="comment" form="userform"></textarea>
        </div>          
      </div>        
    </div>
  </form>
     </div>     
  </body>
</html>