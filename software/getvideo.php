<?php

session_start();
if($_SESSION['username']!=='admin'){
  header('Location: profileregular.php');
  exit;

}

  ?>

<?php 
$conn=mysqli_connect("localhost","root","11235813",'videodb');








$sql="SELECT id,bolum,mesaj,url FROM  rapor ";





$result = mysqli_query($conn, $sql);


$files = mysqli_fetch_all($result,MYSQLI_ASSOC);

 ?>

<!DOCTYPE html>
<html>
<head>
   <style>
    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

    }

 .styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;

}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
  </style>
	<title></title>
</head>
<body>
<label style="margin-left:5%;">Reported Links:</label>
<div style="margin-left:5%;">
 
<table  class = "styled-table"  >
  
  <thead>
    
<th>id</th>
<th>bolum</th>
<th>mesaj</th>

<th>url</th>
<th>sil</th>



  </thead>
<br>
<tbody>
  <?php foreach($files as $file): ?>

<tr active-row>

  
  <td><?php echo $file['id'];?> </td>
  
  <td><?php echo $file['bolum'];?> </td>
  <td><?php echo $file['mesaj'];?> </td>
    <td> <a href="<?php echo $file['url'];?>" target="_blank">link</a> </td>

     <td>



<a href="videosil.php?name=<?php $bolum = $file['bolum']; echo $bolum ?>&id=<?php echo $file['id']?>">
<img border="0" alt="Uyari" src="delete.png" width="20" height="20">
     </td>
  
 
 
 



</tr>

<?php endforeach ; ?>

</tbody>


</table>

<a href="index.php" style="margin-right: : 20px;">
<img border="0" alt="Uyari" src="homepage.png" width="50" >

<a href="profile.php"style="margin: 20px;">
<img border="0" alt="Uyari" src="previous.png" width="50" >
</div>
</body>
</html>