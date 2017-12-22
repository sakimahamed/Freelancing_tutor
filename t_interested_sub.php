<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Freelancing Tutor</title>
    <link rel="stylesheet" type="text/css" href="t_interested_sub.css"> 
</head>
<body>
	<div>
      <div class="freelancing">
      <h1>Freelancing Tutor</h1>      
    </div>  
	<div class="int_sub">
		<h1>Interested Subject</h1>
	</div>
	<div class="ckbox">
		<form method="POST"  action="server.php">
			<label class="container">Mathematics
  				<input type="checkbox" name="Subject[]" value="Mathematics" >
  				<span class="checkmark"></span>
			</label>
			<label class="container">C_Programming
  				<input type="checkbox" name="Subject[]" value="C_Programming">
  				<span class="checkmark"></span>
			</label>
			<label class="container">Java
  				<input type="checkbox" name="Subject[]" value="Java">
  				<span class="checkmark"></span>
			</label>
			<label class="container">Python
  				<input type="checkbox" name="Subject[]" value="Python">
  				<span class="checkmark"></span>
			</label>
			<label class="container">C++
  				<input type="checkbox"   name="Subject[]" value="C++">
  				<span class="checkmark"></span>
			</label>
			<label class="container">English
  				<input type="checkbox"   name="Subject[]" value="English">
  				<span class="checkmark"></span>
			</label>
			<label class="container">Accounting
  				<input type="checkbox"   name="Subject[]" value="Accounting">
  				<span class="checkmark"></span>
			</label>
			<label class="container">Physics
  				<input type="checkbox"  name="Subject[]" value="Physics">
  				<span class="checkmark"></span>
			</label>
			<input class="done" type="submit" name="done" value="Done">
		</form>	
	</div>
</body>
</html>