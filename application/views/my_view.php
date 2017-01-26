<!DOCTYPE html>
<html>
<head>

	<title>Tinderbox volunteer</title>

	<script type="text/javascript" src="<?php echo base_url().'css/jquery-3.1.1.js'; ?>"> </script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">


<script type="text/javascript">
	$(document).ready(function() {
		$('#bttHello').click(function() {
			var fullname = $('#fullname').val();
			$.ajax({
				type:'POST',
				data:{fullname: fullname},
				url:'<?php echo site_url('user/hello'); ?>',
				success: function(result) {
					$('#result1').html(result);
				}
			});
		});

		$('#bttCalculate').click(function(){
			var number1 = $('#number1') .val();
			var number2 = $('#number2') .val();
			if(isNaN(number1) || isNaN(number2))
				alert('Number 1 or Number 2 must be a number');
			else
			{
				$.ajax({
				type:'POST',
				data:{number1: number1, number2: number2},
				url:'<?php echo site_url('user/sum'); ?>',
				success: function(result) {
					$('#result2').html(result);
				}
				});
			}
		})


	});
</script>




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
<br />
<br />

	
<br />
<br />


<center>
<div>

<p>Name</p> 	
<input type="text" id="fullname">
<input type="button" value="Hello" id="bttHello">
<br />
<br />
<span id="result1"></span>
<br />
<br /><br />
<br />

<form>
	<table cellpadding="5" cellspacing="5">
		<tr>
			<td>Number 1...</td>
			<td><input type="text" id="number1"></td>
		</tr>
		<tr>
			<td>Number 2...</td>
			<td><input type="text" id="number2"></td>
		</tr>
		<tr>
			<td>Result</td>
			<td><span id="result2"></span></td>
		</tr>
		<tr>
			<td colspan="5"><input type="button" id="bttCalculate" value="Sum"></td>
		</tr>		
	</table>
</form>

</div>
</center>
<br />
<br /><br />
<br />

<!-- <center><p>Add User</p></center>
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
</center> -->


<br />
<br /><br />
<br />
			
		<center><h1 class="h1h1"> USERS: </h1></center>

<center>
	<table border="1">
		<thead>
			<td>Firstname</td>
			<td>Lastname</td>
			<td>Action</td>
		</thead>
		<tbody>
		<?php foreach ($data as $row) 
		{
		?>
	<tr>
		<td><?php echo $row->firstname; ?></td> 
		<td><?php echo $row->lastname; ?></td>
		<td><a href="edit/?id=<?php echo $row->id; ?>">Edit</a>
		<a href="delete/?id=<?php echo $row->id; ?>">Delete</a></td>
	</tr>
		<?php
		}
		?>
		</tbody>
	</table>
</center>









<br />
<br /><br />
<br />





<?php
if(isset($data))
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
else
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
?>



















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