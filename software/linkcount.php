

  <?php 

$conn=mysqli_connect("localhost","root","11235813",'videodb');

$bname= $_GET['name']; 
$id= $_GET['id']; 
$url=$_GET['url'];
$downloadtimes=$_GET['downloadtimes'];
header("Location: $url");




 
  $newCount = $downloadtimes +1 ;

  $updatQuery= "UPDATE $bname SET downloadtimes=$newCount WHERE id=$id";

  mysqli_query($conn,$updatQuery);











   ?> 