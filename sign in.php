<?php 


include('connect.php');
if(isset($_GET['login'])){
$n1=$_GET['n1'];
$n2=$_GET['n2'];
$sql="SELECT * FROM wuser  ";
$result = $conn->QUERY($sql);
while($row = $result->fetch_assoc()) {
$count = $result->num_rows; 
}
if($count > 0){
  if ($n1 == 'faeza000' && $n2 == '111' ) {
    
      header('Location:http://localhost/New folder/admin/wedding.php');
  }
 
}
else
{
    header('Location:http://localhost/New folder/sing in.php?q1=1');
}
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style3.css">
  </head>
  <body>

<form class="box" action="" method="get">
  <h1>Login</h1>
<?php
error_reporting(0);
$q1 = $_GET['q1'];  
if($q1 == 1){
echo "username or password is not correct";;
}
?>

  <input type="text" name="n1" placeholder="Username">
  <input type="password" name="n2" placeholder="Password">
  <input type="submit" name="login" value="Login">
</form>


  </body>
</html>
