<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>

	<form action= 'login' method="POST">
	    {{ csrf_field() }}
	E-mail: <input type="text" name="email"><br>
	password: <input type="password" name="password"><br>	
	<button type="submit">Login</button>
	</form>
</body>
</html>