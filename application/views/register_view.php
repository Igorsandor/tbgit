<!DOCTYPE HTML>
<html>  
<body>

<?php echo validation_errors(); ?>

<title> Wellcome admin </title>

<form action="userinfo" method="post">
Name: <input type="text" name="firstname"><br>
Lastname: <input type="text" name="lastname"><br>
Email: <input type="text" name="email"><br>
Username: <input type="text" name="username"><br>
Password: <input type="text" name="password"><br>
<input type="submit">
</form>

</body>
</html>

