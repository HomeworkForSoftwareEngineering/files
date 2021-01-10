<?php
session_start();
if(!$_SESSION['username']){
  header('Location: login.php');
  exit;

}
$conn=mysqli_connect("localhost","root","11235813",'videodb');









$sql="SELECT * FROM  ceng,eem,civil,enviromental,mechanical ";


 
if (isset($_POST["submit"]))
 {
 	
     #retrieve file title
 	$year = $_POST['uploadsenename'];
$bolum =$_POST['uploadbolumname'];
$dersadi= $_POST['uploaddersname'];
        $title = $_POST["title"];
        $url = $_POST["url"];
        $uploaduserid=$_SESSION['username'];
 
 
    #sql query to insert into databasep

    $sql="INSERT INTO $bolum (year,dersadi,title,url,name,uploaduserid) VALUES ($year,'$dersadi','$title','$url','$title','$uploaduserid')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}





?>