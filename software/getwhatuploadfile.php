<?php 
session_start();
if(!$_SESSION['username']){
  header('Location: login.php');
  exit;

} 
include 'getwhatfile.php';?>

<!DOCTYPE html>
<html>
<head>

<style>

.arkaplan{

margin: auto;
 margin-top: 30px;
  width: 350px;
  height: 260px;
  padding: 20px;
border-radius: 50px;

  
  
 box-shadow: 0px 0px 10px 2px grey;
  
 background-color:  rgb(255, 255, 255, 0.7);


}

.deneme2{
 margin: auto;

}

.deneme{
    width: 150px;
    display: inline-block;
     
}
.button {
  display: inline-block;
  border-radius: 150px;
  background-color:   rgb(128, 184, 217);
  border: none;
  color: #000080;
  text-align: center;
  font-size: 25px;
  padding: 10px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 30px 55px 5555px 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="stayl.css">
    <link rel="stylesheet" type="text/css" href="port.css">
    <link rel="stylesheet" href="navbarstyle.css">
    <title>Responsive Navbar</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script type="text/javascript" src="dersler.js"></script>


  <title>php file upload and download app</title>
  

</head>


<body >

<header>
        <div class="container" style="margin-left: 150px;">
            <input type="checkbox" name="" id="check">
            
            <div class="logo-container">
                <h3 class="logo">SHS<span>Campus</span></h3>
            </div>

            <div class="nav-btn">
                <div class="nav-links">
                    <ul>
                        <li class="nav-link" style="--i: .6s">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="#">Uploads<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                       <li class="dropdown-link">
                                        <a href="index.php">Uploads Notes<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                          
                                        </div>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="youtube_upload.php">Uploads Videos<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                        
                                        </div>
                                    </li>
                                   
                                   
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: .85s">
                            <a href="#">Downloads<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                       <li class="dropdown-link">
                                        <a href="show.php">Downloads Notes<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                          
                                        </div>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="youtube_download.php">Watch Videos<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                        
                                        </div>
                                    </li>
                                   
                                   
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link" style="--i: 1.1s">
                            <a href="#">Who Are We ?<i class="fas fa-caret-down"></i></a>
                            <div class="dropdown">
                                <ul>
                                    <li class="dropdown-link">
                                    <a href="akif.php">Akif Sakallıoglu</a>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="alzahra.php">Alzahraa Saad</a>
                                    </li>
                                
                                    <li class="dropdown-link">
                                        <a href="burak.html">Burak Eraslan</a>
                                    </li>
                                     <li class="dropdown-link">
                                        <a href="ceren.php">Cemile Ceren Bektas</a>
                                    </li>
                                     <li class="dropdown-link">
                                        <a href="emine.php">Emine Isık</a>
                                    </li>
                                     <li class="dropdown-link">
                                        <a href="huseyin.php">Huseyin Gülçiçek</a>
                                    </li>
                                   
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                       
                    </ul>
                </div>

                <div class="nav-link" style="--i: 3s; " >
                    <a href=# style="padding: 4px; height:30px; margin-top: 10px; "   class="btn transparent">Profile</a>
                    <div class="dropdown" >
                                <ul>
                                       <li class="dropdown-link">
                                        <a href="profile.php">Account<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
                                          
                                        </div>
                                    </li>
                                    <li class="dropdown-link">
                                        <a href="logout.php">Log Out<i class="fas fa-caret-down"></i></a>
                                        <div class="dropdown second">
      
                                        </div>
                                    </li>
                                   
                                   
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                    
                </div>
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>
        
                </div>
            </div>

            <div class="hamburger-menu-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>
    <main>
<section style="overflow: auto;">      
<div class="" >
<div class="deneme2">
<form method="post">
<dl>
   
   <div class="arkaplan">
    <label style="margin-bottom: 20px;"><h4>&nbsp The files that you have uploaded: </h4></label><br>
<br>
<label class="deneme">&nbsp Department: </label>

<select name="bolumname" class="deneme" id="bolumid"  onchange="random_function()">
    
    <option> Select Department</option>
    <option value="ceng">Ceng</option>
    <option value="eem">EEM</option>
    <option value="civil">Civil Engineering</option>
    <option value="enviromental">Environmental Engineering</option>
    <option value="mechanical">Mechanical Engineering</option>
</select>


    


<br>
<br>

<button class="button" type="submit" value="submit"  name="dropbutton" style="vertical-align:middle"><span>Show </span></button>
</div> 
</dl>


</form>





</div>

    
<div class="row" style="">
    
<table class = "tble" style="margin-left:12%; ">
  
  <thead >
    
<th>Report</th>
<th>FileName</th>
<th>Year</th>
<th>Course Name</th>
<th>Downloads </th>


<th>Downloads Link</th>
<th>Rating</th>
<th>Give a Rate or Comment</th>


  </thead>

<tbody>
  <?php foreach($files as $file): ?>

<tr>

    <td>



<a href="reportview.php?name=<?php $bolum = $_POST['bolumname']; echo $bolum ?>&id=<?php echo $file['id']?>">
<img border="0" alt="Uyari" src="uyari.png" width="20" height="20">
     </td>
  <td><?php echo $file['name'];?> </td>
  <td><?php echo $file['year'];?>. Year </td>
  <td><?php echo $file['dersadi'];?> </td>
  <td><?php echo $file['downloads'] ;?> (Times) </td>

  <td>
    
<a href="index.php?file_id=<?php echo $file['id'] ?> "> DOWNLOAD </a>

  </td>
    <td>
      <?php 
        $bolum = $_POST['bolumname'];
        $dID = $file['id'];
        $sql = $conn->query("SELECT id FROM ratings WHERE document_name ='$bolum' AND document_id='$dID'");
        $numR = $sql->num_rows;
        $sql = $conn->query("SELECT SUM(rating) AS total FROM ratings WHERE document_name ='$bolum' AND document_id='$dID'");
        $rData = $sql->fetch_assoc();
        $total = $rData['total'];

        if($numR == 0){
            echo "0";
        }else{
            $avg = $total / $numR;

            echo round($avg,2);
        }
        ?>
    </td>
    <td> 
     <a href = "views.php?name=<?php $bolum = $_POST['bolumname']; echo $bolum ?>
     &id=<?php echo $file['id']?>"> Details </a>
    </td>

<br><br><br><br>
</tr>

<?php endforeach ; ?>

</tbody>


</table>


</div>

</div>
</div>
</section>
</main>

</body>
</html>