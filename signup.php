<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/signup.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
var check = function() {
  if (document.getElementById('password').value == document.getElementById('confirm_password').value) 
  {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';

  }
  else
  {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
        
  }
}
</script>
</head>
<body>
<div class="back-arrow">
	<a href="login.php" ><i class="fa fa-arrow-left" style="font-size:46px;color:black"></i></a>
</div>
  <div class="container">
		<div class="card">
			<h1>Hey,there!</h1>
				<form method="POST" action="up.php">
					<input type="text" placeholder="Enter your Name" class="field" name="name" required><br>
					<input type="password" placeholder="Enter your password" class="field" name="password" id="password" required><br>
					<input type="password" placeholder="Confirm your password" class="field1" id="confirm_password" required onkeyup='check();'><br>
					<span id='message'></span><br>
					<input type="submit" value="Sign up" class="btn" onclick="validate()">
				</form>
				<div class="pass-link">
					<p>already have an account?&nbsp;<a href="login.php" >Login in</a></p>
				</div>
		</div>
	</div>
</body>
</html>