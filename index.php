<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
</head>
<body>
	<h1>Contact Us</h1>
	<form action="sendmail.php" method="post">
		<label for="email">Email Address:</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="carname">Car Name:</label>
		<input type="text" id="carname" name="carname" required><br><br>
		<label for="duration">Duration:</label>
		<input type="text" id="duration" name="duration" required><br><br>
		<label for="price">Price:</label>
		<input type="text" id="price" name="price" required><br><br>
		<label for="message">Message:</label>
		<textarea id="message" name="message" required></textarea><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
