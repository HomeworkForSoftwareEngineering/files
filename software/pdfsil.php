
<?php 
$conn=mysqli_connect("localhost","root","11235813",'deneme');
$idsil=$_GET['id'];
$bolumsil=$_GET['name'];



$sql = "DELETE  FROM rapor WHERE id=$idsil";
$sql2="DELETE  FROM $bolumsil WHERE id=$idsil";
$sql3="DELETE  FROM ratings WHERE document_id=$idsil AND document_name='$bolumsil'";
$sql4="DELETE  FROM comments WHERE docId=$idsil AND depName='$bolumsil'";

if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3)=== TRUE && $conn->query($sql4)=== TRUE ) {
	$conn->close();

 echo '<script>
alert("video has been deleted successfully");
window.location.href="getpdf.php";
</script>';
} else {
  echo "Error deleting record: " . $conn->error;
}


 ?>