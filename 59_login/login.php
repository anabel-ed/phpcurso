<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>formilario</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<h1>Introduce datos</h1>
	<form action="validarLogin.php" method="post">
		<table>
			<tr>
				<td class="izq">Login: </td>
				<td class="der"><input type="text" name="login"></td>
			</tr>
			<tr>
				<td class="izq">Password: </td>
				<td class="der"><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="enviar" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>