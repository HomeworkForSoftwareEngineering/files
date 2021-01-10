<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Login & Signup Form | CodingNepal</title> -->
    <link rel="stylesheet" href="logincss.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="port.css">
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="navbarstyle.css">
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

              <br>  <br>  <br>  <br>
            <br>  <br>
             <div class="wrapper">
      <div class="title-text">
        <div class="title login">
Login Form</div>
<div class="title signup">
Signup Form</div>
</div>
<div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab">
</div>
</div>
<div class="form-inner">
          <form action="validation.php" method="post" class="login">
            <div class="field">
              <input type="text" name="userr" placeholder="Email Address" required>
            </div>
<div class="field">
              <input type="password" name="passwordd" placeholder="Password" required>
            </div>
<div class="pass-link">
<a href="#">Forgot password?</a></div>
<div class="field btn" style="height: 65px; margin: auto;">
              <div class="btn-layer">
</div>
<input type="submit" value="Login">
            </div>




</form>
<form action="registration.php" method="post"  >
            <div class="field">
              <input type="text" name="user"  placeholder="Email Addresssss" required>
            </div>
<div class="field">
              <input type="password" name="password" placeholder="Password" required>
            </div>


<div class="field btn" style="margin-top: 20px; height: 65px; " > 
              <div class="btn-layer" >
</div>
<input type="submit" text="sadas" value="Sign Up" style="margin-top: 4px; border-radius: ">
            </div>
</form>
</div>
</div>
</div>
<script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>

        </section>
    </main>
     


  </body>
</html>
