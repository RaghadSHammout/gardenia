<!DOCTYPE html>
<html>
<head>
	<title>orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

	<style type="text/css">
		table , tr , th , td {
			border: 1px solid black; 
		}

	</style>
</head>
<body>

<?php include 'header.php'; ?>

<table>
	<tr>

	<th>id</th>
	<th>name user</th>
	<th>phone</th>
	<th>email</th>
	<th>city</th>
	<th>date</th>
	<th>time</th>
	<th>total products</th>
	<th>total price</th>

	</tr>


	<?php
	include ('../connect.php');
	
	$sql="SELECT * FROM `order`  ";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
	?>

	<tr>

	
	<th><?php echo $row['id']  ?></th>
	<th><?php echo $row['name']  ?></th>
	<th><?php echo $row['phone']  ?></th>
	<th><?php echo $row['email']  ?></th>
	<th><?php echo $row['city']  ?></th>
	<th><?php echo $row['date']  ?></th>
	<th><?php echo $row['wtime']  ?></th>
	<th><?php echo $row['total_products']  ?></th>
	<th><?php echo $row['total_price']  ?></th>

	</tr>
	
	<?php } ?>


</table>


</body>
</html>