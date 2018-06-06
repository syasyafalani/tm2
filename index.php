<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TICKET MANAGEMENT SYSTEM</title>
</head>
<?php
	
require_once('../database/db.php');
	
$serv_no=$this->content[0]['serv_no'];
$seg_group=$this->content[0]['seg_group'];
$prod=$this->content[0]['prod'];
	
$remark=$this->content[0]['remark'];
$tix_stat=$this->content[0]['tix_stat'];
$state=$this->content[0]['state'];	
?>

<body>
	
	
	<p>TICKET MANAGEMENT SYSTEM </p>
<p>&nbsp;</p>
	<table border="2" id="internalActivites" style="width: 100%" class="table table-bordered">
	
		<tr>
		<th>id</th>

		<th>Service No </th>
		<th>Segment Group </th>
		<th>Product Name </th>
		<th>Ticket Status </th></tr>
		<td><?php echo $this->content [0]['id'];?></td>
		<td><?php echo $this->content [0]['serv_no'];?></td>
		<td><?php echo $this->content [0]['seg_group'];?></td>
		<td><?php echo $this->content [0]['prod'];?></td>
		<td><?php echo $this->content [0]['tix_stat'];?></td>	
		
	 
</table>
	<p>&nbsp;</p>

	
</body>
</html>
