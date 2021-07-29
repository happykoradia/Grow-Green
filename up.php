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
	
	function test_input($data)
	{
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
	}

	if ($_SERVER["REQUEST_METHOD"]== "POST")
	{
     
    $adminname = test_input($_POST["name"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("insert into login (name,password) values ('$adminname','$password');");
    if($stmt->execute())
	{?>
		 <script>
			alert("Details Uploaded Succesfully")
			window.location.replace("index.php");
			</script>
	<?php
	}
	else
	{?>
		 <script>
				alert("Error Accoured While Uploading Details")
		</script>
	<?php
	}
	}
?>