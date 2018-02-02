<html lang = "en">
<head>
<meta charset = "UTF-8">
	<title>Login Failed</title>
</head>
<body>
	
	<form action = "login" method = "POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
		<h2>Login Failed</h2>
		
	</form>
</body>
</html>
