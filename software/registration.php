<?php

session_start();



$con = mysqli_connect('localhost','root','11235813');



mysqli_select_db($con,'userregistration');

$name= $_POST['user'];
$pass=$_POST['password'];

$s=" SELECT * FROM usertable where name='$name' && password='$pass'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){

$_SESSION['username']=$name;

echo '<script>
alert("Username is not available");
window.location.href="Login.php";
</script>';

}
else{
	$reg="INSERT INTO usertable (name , password ) VALUES ('$name', '$pass')";
	mysqli_query($con, $reg);
	
	echo '<script>
alert("Successfully Sign Up");
window.location.href="index.php";
</script>';


}



?>