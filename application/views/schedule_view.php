

<!DOCTYPE html>
<html>
<head>
	<title>Schedule</title>
	<link rel="stylesheet" type="text/css" href = "<?php echo base_url();?>css/style.css">
</head>
<body>

<div class="container-fluid">
	<header>
		<div class="headerleft col-xs-4">
			<img src="tblogo.png" alt="">
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

	<div class="swipenav">
		<div class="swipenavbutton">
			<a href="#">Option 1</a>
		</div>

		<div class="swipenavbutton">
			<a href="<?php echo site_url('user/index');?>">Index</a>
		</div>

		<div class="swipenavbutton">
			<a href="#">Option 3</a>
		</div>
	</div>

	<div class="schedulewrap">

		<h1 class="headline"> <? echo $data['title'] ?>    </h1>

		<div class="timespan"> <? echo $data['timespan'] ?> </div>

		<div class="taskdescription"> <? echo $data['content'] ?> </div>

	</div>

	<footer class="col-xs-12">
		<div class="contactbutton">
			<p class="contactsup">Contact supervisor</p>
		</div>
	</footer>
	

</div>

</body>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="menu.js"></script>
</html>