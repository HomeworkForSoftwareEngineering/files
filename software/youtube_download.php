





<?php 

session_start();
if(!$_SESSION['username']){
  header('Location: login.php');
  exit;

}


include 'showvideo.php'; ?>





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
  background-color:     rgb(128, 184, 217);
  border: none;
  color:    #000080;
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
    <link rel="stylesheet" type="text/css" href="port.css">
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="navbarstyle.css">
    <title>Responsive Navbar</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script type="text/javascript" src="dersler.js"></script>


	<title>php file upload and download app</title>
	
    
       <link rel="stylesheet"  href="stayl.css"/>

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
                    <a href="login.php" style="padding: 4px; height:30px; margin-top: 10px; "   class="btn transparent">Profile</a>
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
            
            <div class="">
              <div class="deneme2">
              <form method="post">
<dl>
    
    <div class="arkaplan">
<label class="deneme">&nbsp Department: </label>
<select class="deneme" name="bolumname" class="deneme" id="bolumid"  onchange="random_function()">
    
    <option> Select Department</option>
    <option value="ceng">Ceng</option>
    <option value="eem">EEM</option>
    <option value="civil">Civil Engineering</option>
    <option value="enviromental">Environmental Engineering</option>
    <option value="mechanical">Mechanical Engineering</option>
</select>

<br>
<br>
    
<label class="deneme">&nbsp Select Year:</label>
<select class="deneme" name="senename" id="seneid" onchange="random_function()">
    

    <option>Select Year</option>
    <option value="1">1. Year</option>
    <option value="2">2. Year</option>
    <option value="3">3. Year</option>
    <option value="4">4. Year</option>


</select>

<br>
<br>
<label class="deneme">&nbsp Select Course:</label>
<select class="deneme" id="dersid" name="dersname" >
    <option value="all">Lesson</option>
</select><br><br>
<button class="button" type="submit" value="submit"  name="videodropbutton" style="vertical-align:middle"><span>Show </span></button>
</dl>


</form>

</div>



</div>

    
<div class="row">
 
<table  class = "tble" style="margin-left:12%; " >
  
  <thead>
    
<th>Report</th>
<th>FileName</th>
<th>Year</th>
<th>Course Name</th>


<th>Link</th>
<th>Clicks</th>
<th>Rating</th>
<th>Give a Rate or Comment</th>


  </thead>
<br>
<tbody>
  <?php foreach($files as $file): ?>

<tr>

  <td><a href="videoreport.php?name=<?php $bolum = $_POST['bolumname']; echo $bolum ?>&id=<?php echo $file['id']?>&url=<?php echo $file['url'];?>">
<img border="0" alt="Uyari" src="uyari.png" width="20" height="20"> </td>
  <td><?php echo $file['title'];?> </td>
  
  <td><?php echo $file['year'];?> . Year </td>
  <td><?php echo $file['dersadi'];?> </td>
  
 <td>

 <a href="linkcount.php?name=<?php $bolum = $_POST['bolumname']; echo $bolum ?>&id=<?php echo $file['id']?>&url=<?php echo $file['url'];?>&downloadtimes=<?php echo $file['downloadtimes'];?>" target="_blank">Link</a>
 

</td>

 <td>

<?php echo $file['downloadtimes'] ; ?>(times) 
  
  
</td>
 
    <td>
 <?php 
 $conn=mysqli_connect("localhost","root","11235813",'videodb');

        $bolum = $_POST['bolumname'];
        $dID = $file['id'];
        $sql = $conn->query("SELECT id FROM ratingsvideo WHERE document_name ='$bolum' AND document_id='$dID'");
        $numR = $sql->num_rows;
        $sql = $conn->query("SELECT SUM(rating) AS total FROM ratingsvideo WHERE document_name ='$bolum' AND document_id='$dID'");
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
     <a href = "viewsvideo.php?name=<?php $bolum = $_POST['bolumname']; echo $bolum ?>&id=<?php echo $file['id']?>"> Details </a>
    </td>
   
<br><br><br><br>

</tr>

<?php endforeach ; ?>

</tbody>


</table>


</div>

</div></div>

        </section>
    </main>

</body>
</html>