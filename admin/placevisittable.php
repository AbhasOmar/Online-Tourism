<?php
include 'include/header.php';
// include 'include/navbar.php';



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="a.css">
	<script type="text/javascript" src="b.js"></script>
	<script type="text/javascript" src="c.js"></script>
</head>
<body>
<table class="table table-bordered table-stripped table-hover">
	<tr>
		<th>ID</th>
		<th>IMAGE</th>
		<th>HEADING</th>
		<th>DESCRIPTION</th>
	</tr>


	<?php
	include("connection.php");

	$query="select * from place";
	$result=mysqli_query($conn,$query);
	$count=0;
	if($result){
		while($row= mysqli_fetch_array($result)){
			$count++;
			echo "<tr>
				<td>".$count."</td>
				<td>".$row['image']."</td>
				<td>".$row['heading']."</td>
				<td>".$row['description']."</td>
				</tr>";
		}
	}
	?>
</table>
<div class="container">
		<div class="col-md-3">
			<button type="submit" >DELETE</button>
		</div>
		<div class="col-md-3">
			<button type="submit" >UPDATE</button>
		</div>
	</div>
</body>
</html>

