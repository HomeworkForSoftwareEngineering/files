<?php

session_start();

$username = $_SESSION['username'];


$conn=mysqli_connect("localhost","root","11235813",'deneme');

$sqlFiles = $conn -> query("SELECT ratings.rating FROM ratings LEFT JOIN ceng ON ratings.document_id = ceng.id LEFT JOIN civil ON ratings.document_id = civil.id LEFT JOIN eem ON ratings.document_id = eem.id LEFT JOIN enviromental ON ratings.document_id = enviromental.id LEFT JOIN mechanical ON ratings.document_id = mechanical.id WHERE ceng.uploaduserid = '$username' OR civil.uploaduserid = '$username' OR eem.uploaduserid = '$username' OR enviromental.uploaduserid = '$username' OR mechanical.uploaduserid = '$username'");
$numFiles = $sqlFiles->num_rows;
$sql = $conn -> query("SELECT SUM(ratings.rating) AS rate FROM ratings LEFT JOIN ceng ON ratings.document_id = ceng.id LEFT JOIN civil ON ratings.document_id = civil.id LEFT JOIN eem ON ratings.document_id = eem.id LEFT JOIN enviromental ON ratings.document_id = enviromental.id LEFT JOIN mechanical ON ratings.document_id = mechanical.id WHERE ceng.uploaduserid = '$username' OR civil.uploaduserid = '$username' OR eem.uploaduserid = '$username' OR enviromental.uploaduserid = '$username' OR mechanical.uploaduserid = '$username'");
$row = mysqli_fetch_assoc($sql);
$sumFiles = $row['rate'];

$conn=mysqli_connect("localhost","root","11235813",'videodb');
$sqlVideo = $conn -> query("SELECT ratingsvideo.rating FROM ratingsvideo LEFT JOIN ceng ON ratingsvideo.document_id = ceng.id LEFT JOIN civil ON ratingsvideo.document_id = civil.id LEFT JOIN eem ON ratingsvideo.document_id = eem.id LEFT JOIN enviromental ON ratingsvideo.document_id = enviromental.id LEFT JOIN mechanical ON ratingsvideo.document_id = mechanical.id WHERE ceng.uploaduserid = '$username' OR civil.uploaduserid = '$username' OR eem.uploaduserid = '$username' OR enviromental.uploaduserid = '$username' OR mechanical.uploaduserid = '$username'");
$numVideo = $sqlVideo->num_rows;
$sql2 = $conn -> query("SELECT SUM(ratingsvideo.rating) AS rate FROM ratingsvideo LEFT JOIN ceng ON ratingsvideo.document_id = ceng.id LEFT JOIN civil ON ratingsvideo.document_id = civil.id LEFT JOIN eem ON ratingsvideo.document_id = eem.id LEFT JOIN enviromental ON ratingsvideo.document_id = enviromental.id LEFT JOIN mechanical ON ratingsvideo.document_id = mechanical.id WHERE ceng.uploaduserid = '$username' OR civil.uploaduserid = '$username' OR eem.uploaduserid = '$username' OR enviromental.uploaduserid = '$username' OR mechanical.uploaduserid = '$username'");


$row2 = mysqli_fetch_assoc($sql2);
$sumVideos = $row2['rate'];

$numTotal = $numFiles + $numVideo;
$totalOfRatings = $sumFiles + $sumVideos; 

if($numTotal==0){
 $totalMoney=0;
}
else{
    $totalMoney = round(($totalOfRatings/$numTotal) * 0.0002,2);
}


$conn=mysqli_connect("localhost","root","11235813",'userregistration');
$sqlUser = $conn -> query("UPDATE usertable SET totalMoney = $totalMoney WHERE usertable.name = '$username'");

$sqlrMoney = $conn -> query("SELECT recievedMoney FROM usertable WHERE usertable.name = '$username' ");
$row3 = mysqli_fetch_assoc($sqlrMoney);
$receivedMoney = $row3['recievedMoney'];

$showMoney = round(($totalMoney - $receivedMoney),2);

$sqlAcconut = $conn -> query("UPDATE usertable SET showedMoney = $showMoney WHERE usertable.name = '$username'");
  ?>



<!DOCTYPE html>
<html>
<head>

<style>

.arkaplan{
    margin: auto;
    margin-top: 3%;
    width: 80%;
    padding: 20px;
    border: :10px solid red;
    border-radius: 50px;
    box-shadow: 0px 0px 10px 2px grey;
    background-color:  rgb(255, 255, 255, 0.7);

}
.abc{
  margin:50px;
  position: center;
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
  background-image: linear-gradient(to top, #accbee 0%, #e7f0fd 100%);
  border: none;
  color:    #000080;
  text-align: center;
  font-size: 25px;
  padding: 10px;
  width: 50%;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="port.css">
    <link rel="stylesheet" href="navbarstyle.css">
    <title>Responsive Navbar</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
  
  

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
<form action="contactform.php" method="post">
    <div class = "modal" id = "takeMoneyModal">
        <div class="modal-dialog"  style="background-color: white;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Fill the Form</h5>
                </div>
                <div class="modal-body">
                    <input type = "email" id="email" class ="form-control" name ="email" placeholder = "Email Address" style = "margin-bottom: 5%;"></input>
                    <input type = "text" id="accountName" class ="form-control" name ="name" placeholder = "Fullname of the Account Holder" style = "margin-bottom: 5%;"></input>
                    <input type = "text" id="accountNumber" class = "form-control" name ="number" placeholder = "Account IBAN Number"></input>
                </div>
                <div class="modal-footer">
                    <button class="btn-danger btn" type="submit" name="submit">Send</button>
                    <button class="btn-dark btn" data-dismiss = "modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>
<section style="overflow: auto;">
<div class="arkaplan">
<div class="container">
    <div class = "row">
            <div class="col">
            <img src="user.png" alt="User icon" style="width:40px;height:40px;">
            </div>
    </div>
    <div class="row justify-content-md-center">
            <div class="col-md-auto" style="margin-left: 30%;">
            <h4>Hi! <?php echo $username ?></h4>
            </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-md-center" style="margin-left: 10%;">
        <div class="col-md-auto">
        <p style="font-size: 20px;">Total Number of Ratings: </p>
        </div>
        <div class="col-md-auto">
        <p style="font-size: 20px;"><?php echo $numTotal ?> </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-md-center" style="margin-left: 10%;">
        <div class="col-md-auto">
        <p style="font-size: 20px;">Rating Rate: </p>
        </div>
        <div class="col-md-auto">
        <p style="font-size: 20px;"><?php   if($numTotal==0){ echo "0";} else {echo round($totalOfRatings/$numTotal,2);} ?> </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-md-center" style="margin-left: 10%;">
        <div class="col-md-auto">
        <p style="font-size: 20px;">Money: </p>
        </div>
        <div class="col-md-auto">
        <p style="font-size: 20px;"><?php echo ($showMoney) ?> TL </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-md-center" style="margin-left: 80%;">
        <div class="col">
        <button style="float:right; height: 130%; width: 120%; font-size: 14px; font-weight: 600;" class="btn-warning btn" data-toggle="modal" data-target="#takeMoneyModal" id="takeMoney">Claim Money</button>
        </div>
    </div>
</div>
</div>
<div style="margin-left: 35%; margin-top: 5%">
<form action="getwhatupload.php">
    <button class="button"style="vertical-align:middle" ><span>Show Uploaded Links </span></button>
    
    </form>
  
<form action="getwhatuploadfile.php">
<button class="button" style="vertical-align:middle; background-color: #CBE1F3;"><span>Show Uploaded Documents </span></button>
</form>
        </section>

</main>

<script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>