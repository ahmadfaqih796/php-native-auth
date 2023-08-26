<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
</head>

<body>
	<h1>Login</h1>
	<form action="index.php?controller=Auth&action=login" method="post">
		<input type="text" name="username" placeholder="Username" required><br>
		<input type="password" name="password" placeholder="Password" required><br>
		<input type="hidden" name="action" value="login">
		<button type="submit">Login</button>
	</form>
</body>

</html>