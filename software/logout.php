<?php 

session_start();
unset($_SESSION['username']);

echo '<script>
alert("Successfully Logged Out");
window.location.href="Login.php";
</script>';







 ?>