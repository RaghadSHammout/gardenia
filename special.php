<?php

include('connect.php');

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name , price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>


<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>product</title>

	<link rel="stylesheet" type="text/css" href="css/product.css">
</head>

<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

	<div class="hero">
		<nav class="bar">
			<h2 class="logo"><img src="img/icon2.ico" style="width: 35px; height: 35px;">
Gardenia</h2>
			<ul style="margin-right: 500px; font-size: 20px;">
				<li><a href="home.php" style="color:#ff0080;">Home</a></li>
				<li><a href="wedding.php" style="color:#b300b3;">wedding</a></li>
				<li><a href="public events.php" style="color:#cc6699;">pulic events</a></li>
				<li><a href="#cnt" style="color: #b300b3">Contact Us</a></li>
				<li><a href="cart.php" class="cart"> <i class="fa fa-shopping-cart" style="font-size:48px;color:#ff1a75"></i> <span><?php echo $row_count; ?></span> </a></li>

			</ul>
		</nav>
</div>
<div class="title">
<h1 class="dep-name">Special</h1>
</div>

     <?php
 
      $select_products = mysqli_query($conn, "SELECT * FROM `special`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

	
	

<form action="" method="post">
	<div>
	<div class="product">
		<div>
			<div class="card">
				<img src="admin/special_img/<?php echo $fetch_product['image']; ?>" >
			</div>

	<div class="prodINFO">
			<p  class="info"  style="margin-left: 120px;">ID: <?php echo $fetch_product['name']; ?><br>
			price: <?php echo $fetch_product['price']; ?><?php echo "  S.P  "; ?></p>
			</div>
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <button name="add_to_cart" style="font-size:20px">Add<i class="fa fa-shopping-cart"></i></button>
         </div>
	</div>

				
		</div>
</div>



</form>
	
</div>
  
   <?php
         };
      };
      ?>
<!-- custom js file link  -->
<script src="js/script.js"></script>

		<a name="cnt"></a>

	<footer class="footerClass">
		<div ><p> <a href="sign in.php" style="color:white; text-decoration: none;">Gardenia</a></p>
		<p>You can contact us via the following numbers or via e-mail</p>
		<p>Damascus:<br>
			Mobile:0932650715<br>
				E-mail:gardenia-damas@Gmail.com
		</p>
		<p>Hama:<br>
			Mobile:0947601916<br>
				E-mail:gardenia-hama@Gmail.com
		</p></div>
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-dribbble"></i></a>
		</div>
		<p class="end">CopyRight By Gardenia's Flowers</p>
	</footer>
</body>



















