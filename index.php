<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/index1.css">

<link rel="stylesheet" href="css/index.css">

</head>
<body>
<!-- Overlay content -->
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
	<div class="card1">
		<p id="option"><b>What do you wanna buy?</b></p>
		<a href="plants.php"><img src="image/Group36.png" class="soil"></a>
		<a href="seeds.php"><img src="image/Group37.png" class="soil"></a>
		<a href="soil.php"><img src="image/Group38.png" class="soil"></a>
	</div>
  </div>
</div>

<!--navbar content--> 
<div class="flex-container">

	<div class="flex-item-left">
		<img src="image/logo.svg" class="logo">
	</div>
  
	<div class="flex-item-right">
		<input type="button" class="button1" value="Blog" onclick="window.location.href='www.google.com';"/>
		<input type="button" class="button1" value="About" onclick="window.location.href='www.google.com';"/>
		<input type="button" class="button" value="Sign Up" onclick="window.location.href='login.php';"/>
	</div> 
</div>

<!-- body content-->
<div class="flex-container">
	<div class="container">	
		<div class="card">
		<p id="text"><b>Plants,Flower at one place</b> <P>
		<p id="text1">Thank you for showing interest to The Grow Green.
We are excited to have you visiting our one stop shop garden store!</p>
		<input type="button" onclick="openNav()" value="Shop Now" class="button2"/>
		</div>
		
	</div>
	<div class="container">
        <div class="image">
            <img height="100%" width="100%" src="image/heroimage.svg">
        </div>
    </div>
</div>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
     
</body>
</html>
