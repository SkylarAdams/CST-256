<html lang = "en">
<head>
<meta charset = "UTF-8">
	<title>Login Passed</title>
</head>
<body>
	
	<form action = "login" method = "POST">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
		<h2>Login Passed</h2>
		
	</form>
</body>
</html>
