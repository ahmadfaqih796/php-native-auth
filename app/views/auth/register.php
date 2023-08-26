<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
</head>

<body>
	<h1>Register</h1>
	<form action="index.php?controller=Auth&action=register" method="post">
		<input type="text" name="username" placeholder="Username" required><br>
		<input type="password" name="password" placeholder="Password" required><br>
		<input type="hidden" name="action" value="register">
		<button type="submit">Register</button>
	</form>
</body>

</html>