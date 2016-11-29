

<!DOCTYPE html>
<html>
<head>

	<title>Tinderbox volunteer</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<!--<script type='text/javascript' src="<?php // echo base_url(); ?>js/jquery.min.js"></script>-->
	<meta name="viewport" content="width=device-width, initial-scale=1">



</head>
<body>

<div class="container-fluid">
	<header>
		<div class="headerleft col-xs-4">
		<a href="<?php echo site_url('user/adminlogin'); ?>" title="Website name">
		<img src="<?php echo base_url('img/tblogo.png'); ?>" alt="">
			<!--<img src="tblogo.png" alt="">-->
		</div>

			<div class="col-xs-4"></div>

		<div class="headerright col-xs-4">
			
				<div class="wrapper">
		<nav>
			<a class="menu-nav"></a>
			<ul class="open">
				<li><a href="">qqqqq</a></li>
				<li><a href="">wwwww</a></li>
				<li><a href="">eeeee</a></li>
				<li><a href="">rrrrr</a></li>
				<li><a href="">ttttt</a></li>
			</ul>
		</nav>
	</div>
		
		</div>
	</header>

					<div class="cleaner"></div>

	<div class="userpanel">
		<div class="userpanelleft col-xs-4">
			<?php print_r($this->session->userdata('username')); ?>
		</div>
				<div class="col-xs-4"></div>
		<div class="userpanelright col-xs-4">

		</div>
	</div>
	
					<div class="cleaner"></div>

	<div class="swipenav">
		<div class="swipenavbutton">
			<a href="<?php echo site_url('user/news'); ?>">News</a>
		</div>

		<div class="swipenavbutton">
			<a href="<?php echo site_url('user/schedule');?>">Schedule</a>
		</div>

		<div class="swipenavbutton">
			<a href="<?php echo site_url('user/log_out');?>">Log out</a>
		</div>
	</div>

	<div class="shiftinfo col-xs-12">

	</div>

	<div class="shiftdescription col-xs-12">
			<p class="shiftdescriptiontext">No urgent messages recieved</p>
	</div>

	<div class="calendar col-xs-12">
		
	</div>

	<footer class="col-xs-12">
		<div class="contactbutton">
			<p class="contactsup" > <a href=""> Contact supervisor</p>
		</div>
	</footer>
	

</div>

</body>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="menu.js"></script>
</html>