<?php

session_start();



$con = mysqli_connect('localhost','root','11235813');



mysqli_select_db($con,'userregistration');

$name= $_POST['userr'];
$pass=$_POST['passwordd'];

$s=" SELECT * FROM usertable where name='$name' && password='$pass'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){

$_SESSION['username']=$name;
echo '<script>
alert("Successfully Logged In");
window.location.href="index.php";
</script>';


}
else{

echo '<script>
alert("Username or Password is incorrect");
window.location.href="login.php";
</script>';
}



?>