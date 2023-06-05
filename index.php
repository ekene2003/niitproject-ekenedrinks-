<?php
require_once("./config/db.php");
?>
<!DOCTYPE html>
<html lang="en">
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
     </head>

     <body>
          <header class="index-header">
               <h1 class="header-tittle">Ekene Drinks</h1>
               <ul class="links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#category">Categories</a></li>
                    <li><a href="#drinks">Drinks</a></li>
                    <li><a href="#order">Order</a></li>
               </ul>
               <div class="user-section">
                    <a href="./login.php" class="user-link"><i class="fa fa-user"></i></a>
                    <a href="./search.html" class="user-link"><i class="fa fa-search"></i></a>
                    <div class="cart-a" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                         <div class="position-relative badge-no">    
                           <a class="user-link"><i class="fa fa-cart-shopping"></i></a>
                              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                0
                                <span class="visually-hidden">unread messages</span>
                              </span>
                         </div>
                    </div>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel">Your Cart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body"> 
                        <div class="row mini-cart-wrap">
                         </div>
                         <div class="total">0</div>
                    </div>       
               </div>
          </header>
          <div class="home" id="home">
               <div class="home-section">
                    <div class="container">
                         <div class="row home-wrap">
                              <div class="left col-md-6">
                                   <h1 class="home-head">Drink Juice <br>Stay Fresh</h1>
                                   <p class="home-p">For a natural energy drink and Taste in <br> every healthy sip,
                                        ekene
                                        drinks
                                        is the
                                        solution....</p>
                                   <div class="buttons">
                                        <div class="login"><a href="">Login</a></div>
                                        <div class="drinks"><a href="" style="color: tomato;">Drinks</a></div>
                                   </div>
                              </div>
                              <div class="right col-md-4 d-flex">
                                   <img src="./assets/images/Refreshing_Drink_Fanta_Orange-removebg-preview.png" alt=""
                                        class="home-img">
                                   <img src="./assets/images/Improve_Your_Cholesterol_with_These_Foods-removebg-preview.png"
                                        alt="" class="fruit">
                              </div>
                         </div>
                    </div>
               </div>
               <div class="home-section2">
                    <div class="container">
                         <div class="row home-wrap">
                              <div class="col-md-6">
                                   <h1 class="home-head">Different flavours <br> and great taste</h1>
                                   <p class="home-p">Different flavours for your consumption</p>
                              </div>
                              <div class="right col-md-4 d-flex">
                                   <img src="./assets/images/Fanta_Refresco_con_Gas__Sabor_Fresa_-_Paquete_de_12_x_355_ml_-_Total__4260_ml-removebg-preview.png"
                                        alt="" class="home-img">
                                   <img src="./assets/images/Fresh_Strawberries_PNG_Image__Fresh_Hand_Painted_Strawberry_Illustrator__Strawberry_Clipart__Strawberry_Illustration__Strawberry_PNG_Image_For_Free_Download-removebg-preview.png"
                                        alt="" class="fruit">
                              </div>
                         </div>
                    </div>
               </div>
               <div class="home-section3">
                    <div class="container">
                         <div class="row home-wrap">
                              <div class="col-md-6">
                                   <h1 class="home-head">For you <br> and your family.</h1>
                                   <p class="home-p">ekene's drinks are suitable for all age groups. </p>
                              </div>
                              <div class="right col-md-4 d-flex">
                                   <img src="./assets/images/Drinks-removebg-preview.png" alt="" class="home-img">
                                   <img src="./assets/images/_35_ILLUSTRATING_AS_MY_REMEDY-removebg-preview.png" alt=""
                                        class="fruit">
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="advert-section">
               <div class="container">
                    <div class="row ">
                         <div class="col-md-5 advert  p-4">
                              <div class="advert-left">
                                   <img src="./assets/images/Coca Cola.jpeg " alt="" class="advert-img">
                              </div>
                              <div class="advert-right">
                                   <h1 class="popular-head">
                                        Popular Items
                                   </h1>
                                   <p class="popular-p">
                                        35 items
                                   </p>
                                   <a href="" class="shop-now">
                                        Shop Now <i class="fa fa-shopping-bag"></i>
                                   </a>
                              </div>
                         </div>
                         <div class="col-md-5 advert p-4">
                              <div class="advert-left">
                                   <img src="./assets/images/pexels-ali-pli-14650660.jpg" alt="" class="advert-img">
                              </div>
                              <div class="advert-right">
                                   <h1 class="new-head">
                                        New Items
                                   </h1>
                                   <p class="new-p">
                                        25 items
                                   </p>
                                   <a href="" class="shop-now">
                                        Shop Now <i class="fa fa-shopping-bag"></i>
                                   </a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="about-section" id="about">
               <img src="./assets/images/pexels-alleksana-4113666.jpg" class="about-bg"></img>
               <div class="container-fluid">
                    <div class="row ">
                         <div class="about-wrap">
                              <h2 class="about-head text-center">About Us</h2>
                              <p class="about-p text-center">Ekene's drink is a nigerian company which was established
                                   in 2003. We
                                   provide quality drinks with great taste and natural nutrients. We have diffrent
                                   categories for you and your family to enjoy ranging from soft drinks, beer and
                                   natural fruit juice.</p>
                         </div>
                    </div>
               </div>
          </div>
          <div class="category" id="category">
               <div class="container">
                    <div class="row">
                         <h1 class="category-head text-center mt-5">
                              Categories
                         </h1>
                         <div class="row mt-5">
                              <div class="col-md-4">
                                   <div class="card">
                                        <img src="./assets/images/pexels-ali-pli-14650660.jpg" class="card-img-top"
                                             alt="...">
                                        <div class="card-body">
                                             <h5 class="card-title">Soft Drinks</h5>
                                             <p class="card-text">Ekene's Soft drinks are rich in taste and are suitable
                                                  for all age groups.</p>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-4">
                                   <div class="card">
                                        <img src="./assets/images/Frozen Orange Prosecco - Frozecco.jpeg" class="
                                             card-img-top" alt="...">
                                        <div class="card-body">
                                             <h5 class="card-title">Fruit Juice</h5>
                                             <p class="card-text">Natural fruit juice with no chemical added. Good for
                                                  you and your family</p>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-4">
                                   <div class="card">
                                        <img src="./assets/images/pexels-maria-pop-339696.jpg" class="card-img-top"
                                             alt="...">
                                        <div class="card-body">
                                             <h5 class="card-title">Beer</h5>
                                             <p class="card-text">Ekene's beer with rich taste, <span style="color: red
                                             ;">not to be sold to anyone under 18</span>.</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="drinks-section" id="drinks">
               <div class="container">
                    <div class="row">
                         <h1 class="drink-head text-center mt-5">
                              Drinks
                         </h1>
                         <div class="drink-category d-flex justify-content-center gap-5 mt-5">
                              <button class="drink-btn col-md-2" data-category="all">
                                   All
                              </button>
                              <button class="drink-btn col-md-2" data-category="soft drink">
                                   Soft drinks
                              </button>
                              <button class="drink-btn col-md-2" data-category="fruit juice">
                                   Fruit juice
                              </button>
                              <button class="drink-btn col-md-2" data-category="beer">
                                   Beer
                              </button>
                         </div>
                         <div class="row mt-5">
                              <div class="col-md-4 drinks" data-type="beer">
                                   <div class="card">
                                        <img src="./assets/images/pexels-maria-pop-339696.jpg" class="card-img-top"
                                             alt="...">
                                        <div class="card-body">
                                             <h5 class="card-title">Ocean eye</h5>
                                             <p class="card-p text-center">Drinks > beer
                                             <p class="price text-center"><i class="fa fa-naira-sign"></i> 3000</p>
                                             <button class="cart">Add to cart</button>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-4 drinks" data-type="fruit juice">
                                   <div class="card">
                                        <img src="./assets/images/Frozen Orange Prosecco - Frozecco.jpeg"
                                             class="card-img-top" alt="...">
                                        <div class="card-body">
                                             <h5 class="card-title">bannana shake</h5>
                                             <p class="card-p text-center">Drinks > fruit juice
                                             <p class="price text-center"><i class="fa fa-naira-sign"></i> 4000</p>
                                             <button class="cart">Add to cart</button>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-4 drinks" data-type="soft drink">
                                   <div class="card">
                                        <img src="./assets/images/Coca Cola.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                             <h5 class="card-title">fanta</h5>
                                             <p class="card-p text-center">Drinks > Soft Drinks
                                             <p class="price text-center"><i class="fa fa-naira-sign"></i> 9000</p>
                                             <button class="cart">Add to cart</button>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-4 drinks" data-type="beer">
                                   <div class="card">
                                        <img src="./assets/images/pexels-maria-pop-339696.jpg" class="card-img-top"
                                             alt="...">
                                        <div class="card-body">
                                             <h5 class="card-title">Maria 5</h5>
                                             <p class="card-p text-center">Drinks > beer
                                             <p class="price text-center"><i class="fa fa-naira-sign"></i> 1000</p>
                                             <button class="cart">Add to cart</button>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-4 drinks" data-type="fruit juice">
                                   <div class="card">
                                        <img src="./assets/images/Frozen Orange Prosecco - Frozecco.jpeg"
                                             class="card-img-top" alt="...">
                                        <div class="card-body">
                                             <h5 class="card-title">orange splash</h5>
                                             <p class="card-p text-center">Drinks > fruit juice
                                             <p class="price text-center"><i class="fa fa-naira-sign"></i> 200</p>
                                             <button class="cart">Add to cart</button>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-4 drinks" data-type="soft drink">
                                   <div class="card">
                                        <img src="./assets/images/Coca Cola.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                             <h5 class="card-title">malt</h5>
                                             <p class="card-p text-center">Drinks > Soft Drinks
                                             <p class="price text-center"><i class="fa fa-naira-sign"></i> 500</p>
                                             <button class="cart">Add to cart</button>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-4 drinks" data-type="fruit juice">
                                   <div class="card">
                                        <img src="./assets/images/Frozen Orange Prosecco - Frozecco.jpeg"
                                             class="card-img-top" alt="...">
                                        <div class="card-body">
                                             <h5 class="card-title">grape juice</h5>
                                             <p class="card-p text-center">Drinks > fruit juice
                                             <p class="price text-center"><i class="fa fa-naira-sign"></i> 3400</p>
                                             <button class="cart">Add to cart</button>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-4 drinks" data-type="beer">
                                   <div class="card">
                                        <img src="./assets/images/pexels-maria-pop-339696.jpg" class="card-img-top"
                                             alt="...">
                                        <div class="card-body">
                                             <h5 class="card-title">don simon</h5>
                                             <p class="card-p text-center">Drinks > beer
                                             <p class="price text-center"><i class="fa fa-naira-sign"></i> 1000</p>
                                             <button class="cart">Add to cart</button>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-4 drinks" data-type="beer">
                                   <div class="card">
                                        <img src="./assets/images/pexels-maria-pop-339696.jpg" class="card-img-top"
                                             alt="...">
                                        <div class="card-body">
                                             <h5 class="card-title">Beer</h5>
                                             <p class="card-p text-center">Drinks > beer
                                             <p class="price text-center"><i class="fa fa-naira-sign"></i> 3000</p>
                                             <button class="cart">Add to cart</button>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-4 drinks" data-type="fruit juice">
                                   <div class="card">
                                        <img src="./assets/images/Frozen Orange Prosecco - Frozecco.jpeg"
                                             class="card-img-top" alt="...">
                                        <div class="card-body">
                                             <h5 class="card-title">Fruit juice</h5>
                                             <p class="card-p text-center">Drinks > fruit juice
                                             <p class="price text-center"><i class="fa fa-naira-sign"></i> 3000</p>
                                             <button class="cart">Add to cart</button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="order-section" id="order">
               <div class="container">
                    <div class="row">
                         <div class="order-section-title">
                              <h3 class="text-center mb-5 mt-5">Place an order</h3>
                         </div>
                         <div class="col-md-6">
                              <img src="./assets/images/PEPSI BLACK CGI.png" alt="" class="form-img">
                         </div>
                         <div class="col-md-6">
                              <form action="order.php" method="post" class="order-form">
                                   <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                             placeholder="your name">
                                   </div>
                                   <div class="mb-3">
                                        <label for="exampleFormControlInput2" class="form-label">Phone No</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput2"
                                             placeholder="+234">
                                   </div>
                                   <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                             placeholder="name@example.com">
                                   </div>
                                   <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                             rows="3"></textarea>
                                   </div>
                                   <button type="submit" class="order-submitBtn">Submit</button>
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
                         <div class="footer-content  mt-2">
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
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
          <script src="./js/jquery.js"></script>
          <script src="./js/sweetalert.min.js"></script>
          <script src="./js/script.js"></script>
          <script src="./js/all.min.js"></script>
     </body>

</html>