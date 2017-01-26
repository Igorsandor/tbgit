<!DOCTYPE html>
<html>
<head>
	<title>Schedule</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<!--<script type='text/javascript' src="<?php // echo base_url(); ?>js/jquery.min.js"></script>-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container-fluid">
	<header>
		<div class="headerleft col-xs-12">
		<a href="<?php echo site_url('user/adminlogin'); ?>" title="Website name"></a>

		<img src="<?php echo base_url('img/tblogo.png'); ?>" alt="" class="tinderlogo">
		</br >
		<h5 class="usernamedisplay"><?php print_r($this->session->userdata('username')); ?>  <a href="<?php echo site_url('user/log_out');?>" class="abutton abutton3 logoutbutton">&nbsp;&nbsp;&nbsp;Log out</a></h5>
			<!--<img src="tblogo.png" alt="">-->


		</div>

			<div class="col-xs-4"></div>
	</header>

					<div class="cleaner"></div>
	
					<div class="cleaner"></div>


<div class="shiftdescription col-xs-12">
	<nav class="swipenav">
		<li class="swipenavbutton swipenavbutton1">
			<a href="<?php echo site_url('user/index'); ?>" class="abutton abutton1">Home</a>
		</li>

		<li class="swipenavbutton swipenavbutton2">
			<a href="<?php echo site_url('user/schedule');?>" class="abutton abutton2">Schedule</a>
		</li>

		<li class="swipenavbutton swipenavbutton3">
			<a href="<?php echo site_url('user/news');?>" class="abutton abutton3 abuttonselected">News</a>
		</li>
	</nav>
</div>















<!-- 
					<center><p>Update User</p></center>
<center>
<?php echo form_open('User/updateuser'); ?>
<table>
	<tr>
		<td>First Name: </td>
		<td>
		<input type="hidden" name="eid" value="<?php echo $data[0]->id; ?>">
		<input type="text" name="firstname" value="<?php echo $data[0]->firstname; ?>"></td>
	</tr>
	<tr>
		<td>Last Name: </td>
		<td><input type="text" name="lastname" value="<?php echo $data[0]->lastname; ?>"></td>
	</tr>
	<tr>
		<td><input type="submit" name="add" value="Add"></td>
	</tr>
</table>
</center>

 -->


<?php
if(isset($data))
{
	?>

	<center><p>Update User</p></center>
<center>
<?php echo form_open('User/updateuser'); ?>
<table>
	<tr>
		<td>First Name: </td>
		<td>
		<input type="hidden" name="eid" value="<?php echo $data[0]->id; ?>">
		<input type="text" name="firstname" value="<?php echo $data[0]->firstname; ?>"></td>
	</tr>
	<tr>
		<td>Last Name: </td>
		<td><input type="text" name="lastname" value="<?php echo $data[0]->lastname; ?>"></td>
	</tr>
	<tr>
		<td><input type="submit" name="add" value="Add"></td>
	</tr>
</table>
</center>

	<?php
}
else
{
	?>

		<center><p>Add User</p></center>
<center>
<?php echo form_open('User/add_userrr'); ?>
<table>
	<tr>
		<td>First Name: </td>
		<td><input type="text" name="firstname"></td>
	</tr>
	<tr>
		<td>Last Name: </td>
		<td><input type="text" name="lastname"></td>
	</tr>
	<tr>
		<td><input type="submit" name="add" value="Add"></td>
	</tr>
</table>
</center>

	<?php
}
?>












<footer class="myfooter col-xs-12 navbar-fixed-bottom">
		<div class="contactbutton">
			<p class="contactsup"><a href="<?php echo site_url('user/supage');?>" class="abutton abutton2 contactbutton">Contact Supervisor</a></p>
		</div>
	</footer>
	

</div>

</body>
</html>