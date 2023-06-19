<?php
require_once('./includes/header.php');

?>

<body>
  <header class='dashboard-header p-3'>
    <div class='dashboard-head-p'>
      <p class='dashboard-p'> <span style='color:darkgrey;'>Pages</span>/Profile</p>
      <h4 class='dashboard-p-head'>Profile</h4>
    </div>
    <div class='right-dashheader'>
      <form action='' class='ms-5  dashboard-search'>
        <input type='search' name='' id='' placeholder='Type here....'>
        <button type='submit' class='searchbtn-dashboard'><i class='fa fa-search'></i></button>
      </form>
      <div class='signup-dash'>
        <a href=''>
          <p class='dashsignup-p'>
            <i class='fa fa-user'></i>
            Sign In
          </p>
        </a>
      </div>
      <button class='btn dashboard-toggle ms-4' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasRight' aria-controls='offcanvasRight'><i class='fa fa-bars'></i></button>
      <div class='offcanvas offcanvas-start sidebar' tabindex='-1' id='offcanvasRight' aria-labelledby='offcanvasRightLabel'>
        <div class='offcanvas-header'>
          <div class='profile-wrap'>
            <img src='./assets/images/pexels-ali-pli-14650660.jpg' id='offcanvasRightLabel' alt='' class='profile-pic'>
            <h5 class='profile-name'>Ekene Favour</h5>
          </div>
          <button type='button' class='btn-close' data-bs-dismiss='offcanvas' aria-label='Close'></button>
        </div>
        <hr>
        <div class='offcanvas-body'>
          <ul class='dashboard-content'>
            <li><i class='fa fa-dashboard'></i>Dashboard</li>
            <li><i class='fa fa-list'></i>Orders</li>
            <li><i class='fa fa-wine-bottle'></i>Drinks</li>
            <li><i class='fa fa-user'></i>Profile</li>
            <li><i class='fa fa-users'></i>Users</li>
            <li><i class='fa fa-bell'></i>Message</li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <section class='hero-wrap'>
    <img src='./assets/images/PEPSI BLACK CGI.png' alt='' class='hero-img'>
  </section>
  <section class='dashboard-sec1'>
    <div class='left-dashboard'>
      <div class="">
      <img src='./assets/images/Coca Cola.jpeg' alt='' class='dashboard-dp'>
      </div>
      <div class="">
      <h3 class='profile-n'>Ekene Favour</h3>
      <p class='profile-name-p'>CEO/co-founder</p>
      </div>
    </div>
    <div class='right-dashboard'>
      <a href='' class='db-right-link active-db-link'><i class='fa fa-home'></i>App</a>
      <a href='' class='db-right-link'><i class='fa fa-envelope '></i>Messages</a>
      <a href='' class='db-right-link'><i class='fa fa-home'></i>Settings</a>
    </div>
  </section>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js'></script>
  <script src='./js/all.min.js'></script>

</body>

</html>