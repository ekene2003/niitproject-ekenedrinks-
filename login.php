<?php
require_once("./config/db.php");
?>
<!DOCTYPE html>

     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Ekene's drink</title>
          <link rel="stylesheet" href="./assets/css/style.css">
          <link rel="stylesheet" href="./assets/css/all.min.css">
          <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Bangers&family=Castoro+Titling&family=Cinzel:wght@400;600&family=Edu+TAS+Beginner&family=Edu+VIC+WA+NT+Beginner&family=Exo:wght@300&family=Genos:ital,wght@0,400;1,100&family=IBM+Plex+Serif:wght@300&family=Lobster&family=Monoton&family=Nanum+Gothic&family=Play&family=Press+Start+2P&family=Roboto+Flex:opsz,wght@8..144,200&family=Roboto+Slab:wght@100;300&family=Silkscreen&display=swap"
               rel="stylesheet">
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Bangers&family=Castoro+Titling&family=Cinzel:wght@400;600&family=Edu+TAS+Beginner&family=Edu+VIC+WA+NT+Beginner&family=Exo:wght@300&family=Genos:ital,wght@0,400;1,100&family=IBM+Plex+Serif:wght@300&family=Lobster&family=Monoton&family=Nanum+Gothic&family=Play&family=Press+Start+2P&family=Roboto+Flex:opsz,wght@8..144,200&family=Roboto+Slab:wght@100;300&family=Silkscreen&display=swap"
               rel="stylesheet">
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Bangers&family=Castoro+Titling&family=Cinzel:wght@400;600&family=Dancing+Script:wght@500&family=Edu+TAS+Beginner&family=Edu+VIC+WA+NT+Beginner&family=Exo:wght@300&family=Genos:ital,wght@0,400;1,100&family=IBM+Plex+Serif:wght@300&family=Lobster&family=Monoton&family=Nanum+Gothic&family=Play&family=Press+Start+2P&family=Roboto+Flex:opsz,wght@8..144,200&family=Roboto+Slab:wght@100;300&family=Silkscreen&display=swap"
               rel="stylesheet">
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Bangers&family=Castoro+Titling&family=Cinzel:wght@400;600&family=Cormorant&family=Dancing+Script:wght@500&family=Edu+TAS+Beginner&family=Edu+VIC+WA+NT+Beginner&family=Exo:wght@300&family=Genos:ital,wght@0,400;1,100&family=IBM+Plex+Serif:wght@300&family=Lobster&family=Monoton&family=Nanum+Gothic&family=Play&family=Press+Start+2P&family=Roboto+Flex:opsz,wght@8..144,200&family=Roboto+Slab:wght@100;300&family=Silkscreen&display=swap"
               rel="stylesheet">
               <script src="./assets/js/jquery.js"></script>
            <script src="./assets/js/sweetalert.min.js"></script>
     </head>
     <body class="form-body">
          <img src="./assets/images/PEPSI BLACK CGI.png" alt="" class="login-form-bg">
          <header class="login-header">
               <h1 class="header-tittle">Ekene Drinks</h1>
               <ul class="links">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#category">Categories</a></li>
                    <li><a href="#drinks">Drinks</a></li>
                    <li><a href="#order">Order</a></li>
               </ul>
               <div class="user-section">
                    <a href="login.php" class="user-link"><i class="fa fa-user"></i></a>
                    <a href="" class="user-link"><i class="fa fa-search"></i></a>
                    <a href="" class="user-link"><i class="fa fa-cart-shopping"></i></a>
               </div>
          </header>
          <div class="form-section" id="order">
               <div class="container">
                              <form action="" method="post" class="signup-form row">
                                   <div class="form-section-title">
                                        <h3 class="text-center mb-4 form-tittle">Sign up</h3>
                                   </div>
                                   <div class="mb-3 col-md-6">
                                        <label for="firstname" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname"
                                             placeholder="your username">
                                   </div>
                                   <div class="mb-3 col-md-6">
                                        <label for="lastname" class="form-label">Last name</label>
                                        <input type="text" class="form-control" name="lastname" id="lastname"
                                             placeholder="your username">
                                   </div>
                                   <div class="mb-3 col-md-6">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" id="username"
                                             placeholder="your username">
                                   </div>
                                   <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                             placeholder="name@example.com">
                                   </div>
                                   <div class="mb-3 col-md-6">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password"
                                             placeholder="name@example.com" name="password">
                                   </div> 
                                   <div class="mb-3 col-md-6">
                                        <label for="c-pass" class="form-label">Confirm
                                             Password</label>
                                        <input type="password" class="form-control" id="c-pass"
                                             placeholder="name@example.com" name="cpassword">
                                   </div>
                                   <div class="mb-3 col-md-12">
                                        <label for="profile" class="form-label">Profile picture </label>
                                        <input type="file" class="form-control" id="profile"
                                             placeholder="name@example.com" name="image">
                                   </div>
                                   <button type="submit" class="order-submitBtn" name="signup">Sign Up</button>
                              <div class="signup-small mt-3 text-center">Have an account? Login</div>
                              </form>
                              <form action="" method="post" class="login-form mt-5">
                                   <div class="form-section-title">
                                        <h3 class="text-center mb-4 form-tittle">Login</h3>
                                   </div>
                                   <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="email" class="form-control" id="username"
                                             placeholder="your username">
                                   </div>
                                   <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="email" class="form-control" id="password"
                                             placeholder="name@example.com">
                                   </div>
                                   <button type="submit" class="order-submitBtn" name="login">Login</button>
                              <div class="login-small mt-3 text-center">Don't have an account? Signup</div>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
          <footer class="footer">
               <div class="container">
                    <d class="row">
                         <div class="col-md-3">
                              <h2 class="footer-head">Ekene drinks</h2>
                         </div>
                         <div class="footer-content  mt-3">
                              <div class="social-sec">
                                   <h3 class="footer-end">Contacts</h3>
                                   <div class="contacts">
                                        <a class="footer-links" href="tel:+08120842274">Call us</a>
                                        <a class="footer-links" href="mailto:azubuogufavour1@gmail.com">Our Mail</a>
                                   </div>
                              </div>
                              <div class="social col-md-4 ">
                                   <h3 class="footer-end">Socials</h3>
                                   <div class="social-med">
                                        <a class="footer-links" href="https://www.whatsapp.com/08120842274"
                                             target="_blank">Whatsapp</a>
                                        <a class="footer-links" href="https://www.facebook.com/ekenefavour"
                                             target="_blank">Facebook</a>
                                        <a class="footer-links" href="https://www.twitter.com/FAzubuogu"
                                             target="_blank">Twitter</a>
                                        <a class="footer-links" href="https://www.instagram.com/_.ekene"
                                             target="_blank">Instagram</a>
                                   </div>
                                   <small>&copy;2023, ekene drinks | ekeneszn. All rights reserved</small>
                              </div>
                              <div class="small-info col-md-4">
                                   <h4 class="footer-end">phone:</h4>
                                   <p class="footer-links">+(234)8120842274</p>
                                   <h4 class="footer-end">Email address:</h4>
                                   <p class="footer-links">ekenedrinks@gmail.com</p>
                                   <h4 class="footer-end">Address:</h4>
                                   <p class="footer-links">wuse II, Abuja, Nigeria.</p>
                                   <a href="#"><button class="scroll"><i class="fa fa-chevron-up"></i></button></a>
                              </div>
                         </div>
               </div>
               </div>
          </footer>
          <script>
                              function singleelem(elem) {
                    return document.querySelector(elem);
               };
               function multielem(elem) {
                    return document.querySelectorAll(elem);
               };
               let homeWrap = singleelem(".home");
               let indexheader = singleelem(".index-header");
               let formTogglerLogin = singleelem(".login-small");
               let formTogglerSignup = singleelem(".signup-small");
               let tittle = singleelem(".form-section-title");
               let loginForm = singleelem(".login-form");
               let signupForm = singleelem(".signup-form");
                formTogglerSignup.onclick=()=>{
                    loginForm.style.transition="all 1s ease-in-out";
                    loginForm.style.display="block";
                    signupForm.style.display="none";
                    tittle.innerHTML=`
                    <h3 class="text-center mb-5 mt-5">Login</h3>
                    `;
                }
                formTogglerLogin.onclick=()=>{
                    loginForm.style.display="none";
                    signupForm.style.display="";
                    tittle.innerHTML=`
                    <h3 class="text-center mb-5 mt-5">Sign up</h3>
                    `;
                }
          </script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
          <script src="./assets/js/all.min.js"></script>
     </body>

</html>