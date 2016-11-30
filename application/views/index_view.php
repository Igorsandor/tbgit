

<!DOCTYPE html>
<html>
<head>

	<title>Tinderbox volunteer</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
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

		<!-- <div class="headerright col-xs-4">
			
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
		
		</div> -->
	</header>

					<div class="cleaner"></div>

	<!-- <div class="userpanel">
		<div class="userpanelleft mybuttondiv col-xs-4">
			<a href="<?php echo site_url('user/schedule');?>" class="mybutton">Random</a>
		</div>
				<div class="mybuttondiv col-xs-4">
					<a href="<?php echo site_url('user/schedule');?>" class="mybutton">Schedule</a>
				</div>
		<div class="userpanelright mybuttondiv col-xs-4">
		<a href="<?php echo site_url('user/schedule');?>" class="mybutton">News</a>
		</div>
	</div> -->
	
					<div class="cleaner"></div>


<div class="shiftdescription col-xs-12">
	<nav class="swipenav">
		<li class="swipenavbutton swipenavbutton1">
			<a href="<?php echo site_url('user/index'); ?>" class="abutton abutton1 abuttonselected">Home</a>
		</li>

		<li class="swipenavbutton swipenavbutton2">
			<a href="<?php echo site_url('user/schedule');?>" class="abutton abutton2">Schedule</a>
		</li>

		<li class="swipenavbutton swipenavbutton3">
			<a href="<?php echo site_url('user/news');?>" class="abutton abutton3">News</a>
		</li>
	</nav>
</div>

	<div class="shiftinfo col-xs-12">

	</div>

	<div class="shiftdescription col-xs-12">
			<p class="shiftdescriptiontext"> <img src="<?php echo base_url('css/attention.png'); ?>" alt="" class="attentionimg"> No urgent messages recieved</p>
	</div>

	<div class="cleaner"></div>

	<div class="transparant">
	</div>


	<!-- <div class="calendar col-xs-12">
		
	</div> -->

	<!-- <div class="mystuff col-xs-12">
			<p class="shiftdescriptiontext"></p>
	</div> -->

	<footer class="myfooter col-xs-12 navbar-fixed-bottom">
		<div class="contactbutton">
			<p class="contactsup"><a href="<?php echo site_url('user/supage');?>" class="abutton abutton2 contactbutton">Contact Supervisor</a></p>
		</div>
	</footer>
	

</div>

</body>


	<script type="text/javascript" src="<?php echo base_url(); ?>css/menu.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
</html>