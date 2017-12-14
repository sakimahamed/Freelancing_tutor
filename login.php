<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>My Site</title>
      <link rel="stylesheet" type="text/css" href="login.css"> 
      <script type="text/javascript">
        function function1(){
                var x=document.getElementByName("password1").value;
                var y=document.getElementByName("email").value;
                var xhttp=new XMLHttpRequest();
                xhttp.open("POST","server.php?password1="+x+"&email="+y,true);
                xhttp.send();
                alert("pass is not ok");

        }
      </script>
  </head>
  <body>
    <div>
      <div class="freelancing">
      <h1>Freelancing Tutor</h1>      
    </div>  
    <form class="qsn_typ">
      <div>
        <input type="submit" name="" value="Assignment">
      </div>
      <div>
        <input type="submit" name="" value="Find_Tutor">
      </div>
      <div>
        <input type="submit" name="" value="Question">
      </div>
      <div>
        <input type="submit" name="" value="Project">
      </div>
      <div>
        <input type="submit" name="" value="About">
      </div>
    </form>
    <form class="rec_qsn">
      <div>
        <input type="submit" name="" value="Recent Question">
      </div>
    </form>
    <div class="login">
      <h2>Log in</h2>
      <form method="POST" action="server.php" onclick="return function1()">
        
        <div class="inputBox">
          <input type="text" name="email" required="">
          <label>Email</label>            
        </div>
        <div class="inputBox">
          <input type="password" name="password1" required="">
          
          <label>Password</label>
        </div>
        <input type="submit" name="login" value="Login">
        <h4>Creat a new account</h4>                 
      </form>
      <form action="signup.php">
        <input type="submit" name="" value="Signup">
      </form>
    </div>      
    </div>     
  </body>
</html>