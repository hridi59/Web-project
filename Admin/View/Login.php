<html>
<head>
	<title>Login</title>
</head>
<body>
	<div text-align:center, style="background-image: url('../Asset/back.jpg');">
	<form method="post" action="../Controller/LoginCheck.php">
		<fieldset>
			<legend>LogIn</legend>
			<table>
				<tr>
					<td><td>Username:</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td><td>Password:</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="remember" value="">Remember Me</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Login"></td>
					<td><a href ="../Controller/ForgetPassword.php">Forget Password</a></td>
				</tr>
				<tr>
					<td><a href ="Registration.php">Registration</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
</body>
</html>