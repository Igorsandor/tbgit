<!DOCTYPE html>
<html>
<head>
	<title> Hello this is news here </title> 
</head>
<body>

<br> Hello this is news here. What can I do for you? <br>

		<?php foreach($data as $row){?>
			<table>
   				<tr>
    			<td> <br> <?php echo $row->title;?></td>
    			<td> <br> <?php echo $row->content;?></td>
   				<td> <br> <?php echo $row->timespan;?></td>
  				</tr>
  			</table>
 		 <?php }?>

</body>
</html>