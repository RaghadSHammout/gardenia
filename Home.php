<!DOCTYPE html>
<html>
<head>
	<title>Portfolio website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/department.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style type="text/css">

#slider  {
	overflow: hidden;
	width: 500px;
	height: 700px;
}
#slider figure {
	position: relative;
	width: 500%;
	margin: 0;
	left: 0;
	animation: 20s slider infinite;
}
#slider figure img {
	float: left;
	width: 20%;
	height: 550px;
	opacity: .9;
	border:  3px solid #d98cb3;

	border-radius: 13%;
}

@keyframes slider {
	0% {
		left: 0;
	}
	20% {
		left: 0;
	}
	25% {
		left: -100%;
	}
	45% {
		left: -100%;
	}
	50% {
		left: -200%;
	}
	70% {
		left: -200%;
	}
	75% {
		left: -300%;
	}
	95% {
		left: -300%;
	}
	100% {
		left: -400%;
	}
}

</style>
</head>
<body>
	<!----hero Section start---->

	<div class="hero">
		<nav class="bar">
			<h2 class="logo"><img src="img/icon2.ico" style="width: 35px; height: 35px;">
Gardenia</h2>
			<ul style="margin-right: 500px; font-size: 20px;">
				<li><a href="home.php" style="color:#ff0080;">Home</a></li>
				<li><a href="#about" style="color:#cc6699;">About Us</a></li>
				<li><a href="#cnt" style="color: #b300b3">Contact Us</a></li>
			</ul>
		</nav>

		<div class="content">
			<p class="welcome">Welcome to the world of flowers</p>
			<h1>Gardeni<span class="A">a</span> </h1>
			
			
		</div>
	</div>
<a name="about"></a>
	<!----About section start---->
	<section class="about">
		<div class="main">
	  <div id="slider">
		<figure >
			<img src="img/pic13.jpg">
			<img src="img/pic16.jpg">
			<img src="img/pic17.jpg">
			<img src="img/pic18.jpg">
			<img src="img/pic13.jpg">

		</figure>
      </div>
			<div class="about-text">
				<h3 >About Us</h3>
				<h5>We are a special store that coordinates and designs the most luxurious flower bouquets to suit all your occasions
				We have all kinds of distinctive flowers in different shapes and colors
				If you are a person of fine taste, you are in the right place</h5>
			</div>
		</div>
	</section>


<div >
		<div class="note">
	<h1 style="font-size: 45px;">Deare customer</h1><br>
	To make the selection process easier for you, you will find in front of you three different sections
A section for wedding flowers, a section for public occasions, and a special section where you will find distinctive flower designs that suit many occasions.
	</div></div>


	<div class="department">


		<div>

			<div class="card">
				<a href="wedding.php"><img src="img/pic12.jpg" ></a>
			</div>
			<a href="wedding.php"><button style="margin-left: 165px;"><h2>Wedding</h2></button></a>
			
				
		</div>

		<div>
			<div class="card">
				<a href="public events.php"><img src="img/pic11.jpg"></a>
				
			</div>
			<a href="special.php"><button style="margin-left: 150px;"><h2>public events</h2></button></a>
			
		</div>

		<div>
		    <div class="card">
				<a href="public events.php"><img src="img/pic10.jpg"></a>
				
			</div>
			<a href="special.php"><button style="margin-left: 180px;"><h2 >Special</h2></button></a>
			
		</div>
</div>

	<div>
		
	


	<!------footer start--------->
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
</html>