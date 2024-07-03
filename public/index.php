﻿
<!DOCTYPE html>
<html>
<head>
    <title>Katchowww</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="favicon.ico" rel="icon">



    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet" />
   
    <link rel="stylesheet" href="media.css"/>
    <link rel="stylesheet" href="items_grid.css"/>
    <style>
        .container {
    max-width: 1280px;
    padding: 0 1.5rem;
    margin: auto;
    overflow: hidden; }
  
  .font-size-secondary {
    font-size: 1.3rem; }
  
  .font-medium-weight {
    font-weight: 600;
    font-size: medium; }
  
  .font-high-weight {
    font-weight: bolder;
    font-size: larger; }
  
 
 
  
  * {
    margin: 0;
    padding: 0; }
  
  body {
    font-family: "Dosis", sans-serif;
    line-height: 1.6;
    background: #fff; }
  
  a {
    text-decoration: none;
    color: #333; }
  
  ul {
    list-style: none; }
  
  h2,
  h3,
  h4 {
    text-transform: uppercase; }
  
  img {
    width: 100%; }
  

  #main-nav {
    display: flex;
    justify-content: space-between;
    padding-top: 1rem; }
    #main-nav ul {
      display: flex; }
    #main-nav li {
      padding: 1rem 1.4rem; }
    #main-nav a {
      text-decoration: none;
      color: #333;
      text-transform: uppercase;
      border-bottom: 3px transparent solid;
      padding-bottom: 0.5rem;
      transition: border-color 0.5s; }
      #main-nav a:hover {
        border-color: #ccc; }
      #main-nav a.current {
        border-color: #aaaaff; }
  
  #header-home {
    background: url("fond.jpg") no-repeat center right/cover;
    height: 100vh;
    color: #fff; }
    #header-home .header-content {
      text-align: center;
      padding-top: 20%; }
      #header-home .header-content h1 {
        font-size: 4rem;
        line-height: 1.2; }
  
  #header-inner {
    background: url("fond.jpg") no-repeat 20% 30%/cover;
    height: 5.5rem;
    border-bottom: 3px solid #aaaaff; }
  
  
  
 
  
  #main-footer {
    background: #333;
    color: #fff;
    height: 5rem; }
    #main-footer .footer-content {
      display: flex;
      justify-content: space-between;
      height: 5rem;
      align-items: center; }
      #main-footer .footer-content .social .fab {
        margin-right: 1rem;
        border: 2px #fff solid;
        border-radius: 50%;
        height: 20px;
        width: 20px;
        line-height: 20px;
        text-align: center;
        padding: 0.5rem; }
        #main-footer .footer-content .social .fab:hover {
          background: #ffbc00; }
  
    </style>

    <header id="header-inner"> 
        <div class="container"> 
           <!-- Navbar -->
           <nav id="main-nav">
               <ul>
                   <li>
                    
                        <a href="index.php" class="current">Home</a>
                    
                    </li>
                    <li>
                           
                           <a href="login.php">Login</a>
                        
                    </li>
                    <li>
                        
                            <a href="register.php">SignUp</a>
                        
                    </li>
                   
               </ul>
           </nav>
       </div>
    </header>
</head>
<body>

<div class="bg-img">
  <div class="content">
    <header>Connexion choice</header>
    <div class="signup">Have an account?
      <a href="login.php">Signin Now</a>
    </div>
    <br>
    <div class="signup">Don't have account?
      <a href="register.php">Signup Now</a>
    </div>
  </div>
</div>

<footer id="main-footer">
    <div class="footer-content container">
        <p>
            Site de test - Bachelier
        </p>
    </div>
</footer>

</body>
</html>
