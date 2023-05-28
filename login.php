<?php
require_once("./config/db.php");
require_once("./includes/loginheader.php");
?> 

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
                                   <input type="hidden" name="signupAction">
                                   <div class="form-section-title">
                                        <h3 class="text-center mb-4 form-tittle">Sign up</h3>
                                   </div>
                                   <div class="mb-3 col-md-6">
                                        <label for="firstname" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname"
                                             placeholder="your firstname">
                                   </div>
                                   <div class="mb-3 col-md-6">
                                        <label for="lastname" class="form-label">Last name</label>
                                        <input type="text" class="form-control" name="lastname" id="lastname"
                                             placeholder="your lastname">
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
                                             placeholder="*******" name="password">
                                   </div> 
                                   <div class="mb-3 col-md-6">
                                        <label for="c-pass" class="form-label">Confirm
                                             Password</label>
                                        <input type="password" class="form-control" id="c-pass"
                                             placeholder="******" name="cpassword">
                                   </div>
                                   <div class="mb-3 col-md-12">
                                        <label for="profile" class="form-label">Profile picture </label>
                                        <input type="file" class="form-control" id="profile"
                                              name="image">
                                   </div>
                                   <button class="order-submitBtn" type="submit">Sign Up</button>
                              <div class="signup-small mt-3 text-center">Have an account? Login</div>
                              </form>
                              <form action="" method="post" class="login-form mt-5">
                                   <input type="hidden" name="loginAction">
                                   <div class="form-section-title">
                                        <h3 class="text-center mb-4 form-tittle">Login</h3>
                                   </div>
                                   <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username"
                                         name="username" placeholder="your username">
                                   </div>
                                   <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password"
                                         name="password" placeholder="*******">
                                   </div>
                                   <button type="submit" class="order-submitBtn">Login</button>
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
                $(".nav-link").each(function(){
                let page = location.pathname.split("/")[2], text = this.textContent.toLowerCase(), href = $(this).attr("href");
                if(page == "" && href == "./") $(this).addClass("active");
                else if (page == href.substring(2)) $(this).addClass("active");
            })
          </script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
          <script src="./js/all.min.js"></script>
     </body>

</html>