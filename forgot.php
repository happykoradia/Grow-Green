<?php

	$databaseHost = 'localhost';
	$databaseName = 'growgreen';
	$databaseUsername = 'root';
	$databasePassword = '';
	
	try {
		
		$conn = new PDO('mysql:host=' . $databaseHost . ';dbname=' . $databaseName . '', $databaseUsername, $databasePassword);
	}
	catch (PDOException $e) {
    echo $e->getMessage();
	}
	// echo "Connection is there<br/>";
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

	if ($_SERVER["REQUEST_METHOD"]== "POST")
	{
     
		$adminname = test_input($_POST["name"]);
		$stmt = $conn->prepare("SELECT * FROM login ");
		$stmt->execute();
		$users = $stmt->fetchAll();
					foreach($users as $user)
					{
         
						if(($user['name'] == $adminname)) 
						{
							echo $user['password'];
						}
						else 
						{ ?>
							<script language='javascript'>
							alert('You dont have account Please Signup?');
							window.location.href='signup.php';
							</script>
						<?php	
						}
					}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="back-arrow">
	<a href="login.php" ><i class="fa fa-arrow-left" style="font-size:46px;color:black"></i></a>
</div>
  <div class="container">
		<div class="card">
			<h1>forgot password?!</h1>
				<form method="POST">
					<input type="text" placeholder="Enter your name" class="field" name="name" required><br>
					<input type="submit" value="Fetch the password" class="btn">
				</form>
				<div class="pass-link">
					<p>Don't have an account?&nbsp;<a href="signup.php" >Sign up</a></p>
				</div>
		</div>
	</div>
</body>
</html>