<?php
require_once('./includes/header.php');

?>

<body>
  <header class='dashboard-header p-3'>
    <div class='dashboard-head-p'>
      <p class='dashboard-p'> <span style="color:darkgrey;">Pages</span>/Profile</p>
      <h4 class='dashboard-p-head'>Profile</h4>
    </div>
    <div class="right-dashheader">
      <form action='' class='ms-5  dashboard-search'>
        <input type='search' name='' id='' placeholder='Type here....'>
        <button type="submit" class="searchbtn-dashboard"><i class="fa fa-search"></i></button>
      </form>
      <div class="signup-dash">
      <p class="dashsignup-p"> 
      <i class="fa fa-user"></i>
      Sign In</p>
      </div>
      <button class='btn dashboard-toggle ms-4' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasRight' aria-controls='offcanvasRight'><i class="fa fa-bars"></i></button>
      <div class='offcanvas offcanvas-start' tabindex='-1' id='offcanvasRight' aria-labelledby='offcanvasRightLabel'>
        <div class='offcanvas-header'>
          <div class="profile-wrap">
          <img src="./assets/images/pexels-ali-pli-14650660.jpg" id='offcanvasRightLabel' alt="" class="profile-pic">
          <h5 class='profile-name'>Ekene Favour</h5>   
          </div>
          <button type='button' class='btn-close' data-bs-dismiss='offcanvas' aria-label='Close'></button>
        </div>
        <hr>
        <div class='offcanvas-body'>
          <ul class="dashboard-pages">
            <li><i class="fa fa-dashboard"></i> dashboard</li>
            <li><i class="fa fa-list"></i>Orders</li>
            <li><i class="fa fa-cup"></i></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js'></script>
  <script src="./js/all.min.js"></script>

</body>

</html>