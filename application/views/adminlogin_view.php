<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>\

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<!--<script type='text/javascript' src="<?php // echo base_url(); ?>js/jquery.min.js"></script>-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php echo validation_errors(); ?>


<!-- <div class="tblogocircle">
	<img src="tblogocircle.png">
</div>

<div class="fields">
<form action="">
<input type="text" name="username" placeholder="Your username"> <br>
<input type="password" name="password" placeholder="Your password"> <br>
<input type="submit">
</form>
</div> -->

<div class="container2">

<div class="picdiv">
<img src="<?php echo base_url('css/tblogocircle.png'); ?>" class="pic">
</div>

<div class="admindiv">
<h1 class="admin"> LOG IN </br> AS ADMIN </h1>
</div>


<div class="forms">
<form action="userlogin" method="get">
		<input type="text" name="username" placeholder="Your username"> <br>
		<input type="password" name="password" placeholder="Your password"> <br>
		<input type="submit">
</form>
</div>




</div>

</body>
</html>