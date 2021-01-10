<?php

$conn=mysqli_connect("localhost","root","11235813",'videodb');









$sql="SELECT * FROM  ceng,eem,civil,enviromental,mechanical ";



if(isset($_POST['videodropbutton']))

{
	$bolum=$_POST['bolumname'];

	$dersadi =$_POST['dersname'];
	$sql="SELECT * FROM  $bolum WHERE dersadi='$dersadi'";
}

$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result,MYSQLI_ASSOC);


if(isset($_GET['file_id'])){
$id= $_GET['id']; 
$url=$_GET['url'];
$bname= $_GET['bolum'];

$downloadtimes=$_GET['downloadtimes'];





 
  $newCount = $downloadtimes +1 ;

  $updatQuery= "UPDATE $bname SET downloadtimes=$newCount WHERE id=$id";

  mysqli_query($conn,$updatQuery);

}

?>




