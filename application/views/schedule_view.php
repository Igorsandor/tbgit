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
			<a href="<?php echo site_url('user/schedule');?>" class="abutton abutton2 abuttonselected">Schedule</a>
		</li>

		<li class="swipenavbutton swipenavbutton3">
			<a href="<?php echo site_url('user/news');?>" class="abutton abutton3">News</a>
		</li>
	</nav>
</div>

					<div class="cleaner"></div>

	

<!-- 	<div class="schedulewrap">

		<h1 class="headline"> <?php echo $data['title'] ?>    </h1>

		<h5 class="timespan">  <p class="timespanp"><?php echo $data['timespan'] ?></p>  </h5>

		<h3 class="taskdescription">  <p class="taskdescriptionp"><?php echo $data['content'] ?></p>  </h3>

	</div> -->

<div class="schedulewrap">

		<h1 class="headline">  </h1>

		<div class="timespan"> </div>

		<div class="taskdescription">  </div>
		
		<?php foreach($data as $row){?>
			
   			<div class="containerfordata">
    		 <h1 class="headline"><b><?php echo $row->title;?> </b></h1></td>
    		 <h5 class="timespan"><?php echo $row->timespan;?> </h5></td>
   			 <h3 class="taskdescription"><?php echo $row->content;?> </h3></td>
   			</div>
  			
  			</br>
  			</br>
  			</br>
  			
 		 <?php }?>

	</div>


	<footer class="myfooter col-xs-12 navbar-fixed-bottom">
		<div class="contactbutton">
			<p class="contactsup"><a href="<?php echo site_url('user/supage');?>" class="abutton abutton2 contactbutton">Contact Supervisor</a></p>
		</div>
	</footer>
	

</div>

</body>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="menu.js"></script>
</html>