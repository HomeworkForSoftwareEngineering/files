<?php


$conn=mysqli_connect("localhost","root","11235813",'deneme');


$kullanici=$_SESSION['username'];



$sql="SELECT * FROM  ceng,eem,civil,enviromental,mechanical ";

if(isset($_POST['dropbutton']))

{
	$bolum=$_POST['bolumname'];

	
	$sql="SELECT * FROM  $bolum WHERE uploaduserid='$kullanici'";
}

$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result,MYSQLI_ASSOC);





if(isset($_POST['save']))
{

$filename = $_FILES['myfile']['name'];

$destination = 'uploads/' . $filename;

$extension= pathinfo($filename , PATHINFO_EXTENSION);

$file = $_FILES['myfile']['tmp_name'];

$year = $_POST['uploadsenename'];
$bolum =$_POST['uploadbolumname'];
$dersadi= $_POST['uploaddersname'];

if(!in_array($extension,['zip','pdf','png']))
{
		
		echo '<script>
alert("your file extension must be .pdf,.zip or .png");

</script>';
}




else{

if(move_uploaded_file($file, $destination))
{
	$uploaduserid=$_SESSION['username'];

	$sql = "INSERT INTO $bolum (name,year,downloads,dersadi,uploaduserid) VALUES ('$filename',$year,'0','$dersadi','$uploaduserid')";



	if(mysqli_query($conn,$sql))
	{

			echo '<script>
alert("file upload succesful");

</script>';
		
	}
	else{

			echo '<script>
alert("file cannot upload");

</script>';
		
	}

}

}

}

if(isset($_GET['file_id']))
{

$id = $_GET['file_id'];


$sql="SELECT * FROM ceng WHERE id= $id";
$result = mysqli_query($conn,$sql);

$file = mysqli_fetch_assoc($result);

$filepath = 'uploads/' . $file ['name'];

if(file_exists($filepath))
{

	header('Content-Type: application/octet-stream');

	header('Content-Description: File Transfer');

	header('Content-Disposition: attachment; filename=' . basename($filepath));

	header('Expires: 0');

	header('Cache-Control: must-revalidate');

	header('Pragma:public');


	header('Content-Length:' . filesize('uploads/'.$file['name']));



	readfile('uploads/'. $file['name']);

 
	$newCount = $file['downloads'] +1 ;

	$updatQuery= "UPDATE ceng SET downloads=$newCount WHERE id=$id";

	mysqli_query($conn,$updatQuery);

 
	exit;












}


}





?>