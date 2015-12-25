<!DOCTYPE html>
<html>
<head>
	<title>form login</title>
</head>
<body>
<?=validation_errors();?>
<?=form_open('user/cek');?>
	username 
	<input type="text" name="username">
	<br>
	password
	<input type="password" name="pass">
	<br>
	<input type="submit" name="login" value="Signin">
<?=form_close();?>
</body>
</html>