<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<form action="SuperAdminRegcheck.php" method="POST">
		<fieldset align="center">
			<legend>Signup</legend>
			<table align="center">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
				</tr>

				<tr>
					<td>Username</td>
					<td><input type="text" name="uname"></td>
				</tr>

				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>

				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>

				<tr>
					<td></td>
					<td><?php 
						if(isset($_GET['msg'])){
							echo $_GET['msg'];
						}
						?> </td>
				</tr>

			</table>
		</fieldset>
	</form>
</body>
</html>