<?php 

session_start();
if(!$_SESSION['username']){
  header('Location: login.php');
  exit;

}

include 'filesLogic.php'; ?>





<!DOCTYPE html>
<html>
<head>
    <style>
      .arkaplan{
        margin: auto;
   width: 450px;
  height: 550px;
  padding: 20px;
  border: :10px solid red;
border-radius: 50px;

  
  box-shadow: 0px 0px 10px 2px grey;
  
 background-color:  rgb(255, 255, 255, 0.7);

}
        .deneme{
    width: 150px;
    display: inline-block;
  ;
    margin: 30px 15px 15px 25px;
}
.deneme2{    margin: 30px 15px 15px 35px;}

.button {
  display: inline-block;
  border-radius: 150px;
  background-color:       rgb(128, 184, 217);
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="dersler.js"></script>

	<title>php file upload and download app</title>
	<link rel="stylesheet"  href="style.css"/>

</head>


<body>


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

        <section>
            
            <div class="overlay">






   
    <div class="deneme2" >
      <div class="arkaplan">
    <form action="index.php" method="post" enctype="multipart/form-data" >
   

   <label class="deneme">Department:</label>
        <select class="deneme" name="uploadbolumname" id="uploadbolumid" onchange="random_function_upload()">
    
    <option>Select Department</option>
    <option value="ceng">Ceng</option>
    <option value="eem">EEM</option>
    <option value="civil">Civil Engineering</option>
    <option value="enviromental">Environmental Engineering</option>
    <option value="mechanical">Mechanical Engineering</option>
</select>
<br>
<br>

<label class="deneme">Select Year:</label>
<select class="deneme" name="uploadsenename" id="uploadseneid" onchange="random_function_upload()">
    

    <option>Select Year</option>
    <option value="1">1. Year</option>
    <option value="2">2. Year</option>
    <option value="3">3. Year</option>
    <option value="4">4. Year</option>


</select>
<br>
<br>
<label class="deneme">Select Lesson:</label>
<select class="deneme" id="uploaddersid" name="uploaddersname" required >
    <option value="all">Lesson</option>
</select>
<br>
<br>
<div class="deneme2">
        <h3>Upload Files: </h3>
        <br>
                    <input type="file" name="myfile"><br>
                    <button class="button" type="submit" value="submit"  name="save" style="vertical-align:middle"><span>Upload </span></button>
                    

            </form>

                    </div>
                        
    
    </div>


        </section>
    </main>

</body>
</html>