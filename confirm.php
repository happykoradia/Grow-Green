<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/confirm.css">

</head>
<body>

<form action="/action_page.php">
  <div class="container">
    <h1>Order Confirm!!</h1>
    <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Name" name="Name" id="Name" required>

    <label for="street"><b>Street</b></label>
    <input type="text" placeholder="Street Name" name="Streetname" id="Streetname" required>

    <label for="city"><b>City</b></label>
    <input type="text" placeholder="City" name="City" id="city" required>
	
	<label for="State"><b>State</b></label>
    <input type="text" placeholder="State" name="State" id="state" required>
	
	<label for="State"><b>Pincode</b></label>
    <input type="text" placeholder="Pincode" name="pincode" id="pincode" required>
	<h1>Payment Method</h1>
	
	<input type="radio" id="cash" name="cash" value="Cash Delivery">
  	<label for="html">Cash on Delivery</label><br>
	<button type="submit" class="registerbtn">Place Order</button>
  </div>
  
</form>

</body>
</html>
