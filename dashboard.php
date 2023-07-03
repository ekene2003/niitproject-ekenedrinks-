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
    <div class="db-sec-wrap">
      <div class='left-dashboard'>
        <div class="">
          <img src='./assets/images/Coca Cola.jpeg' alt='' class='dashboard-dp'>
        </div>
        <div class="">
          <h3 class='profile-n'>Ekene Favour</h3>
          <p class='profile-name-p'>CEO/Co-founder</p>
        </div>
      </div>
      <div class='right-dashboard'>
        <a href='' class='db-right-link active-db-link'><i class='fa fa-home me-2'></i>App</a>
        <a href='' class='db-right-link'><i class='fa fa-envelope me-2 '></i>Messages</a>
        <a href='' class='db-right-link'><i class='fa fa-tools me-2'></i>Settings</a>
      </div>
    </div>
    <section class="dashboard-settings">
      <h5 class="settings-head">Platform Settings</h5>
      <p class="setting-small">ACCOUNT</p>
      <div class="toogle-wrap">
        <div class="wrap1">
          <div class="toogle">
            <div class="toogle-circle">
              <i class="fa fa-circle"></i>
            </div>
          </div>
          <p class="toogle-p">Email me when someone follows me</p>
        </div>
        <div class="wrap1">
          <div class="toogle inverse-tog">
            <div class="inverse-toogle-circle">
              <i class="fa fa-circle"></i>
            </div>
          </div>
          <p class="toogle-p">Email me when someone answers on my post
          </p>
        </div>
        <div class="wrap1">
          <div class="toogle">
            <div class="toogle-circle">
              <i class="fa fa-circle"></i>
            </div>
          </div>
          <p class="toogle-p">Email me when someone mentions me
          </p>
        </div>
      </div>
      <p class="setting-small">Application</p>
      <div class="toogle-wrap">
        <div class="wrap1">
          <div class="toogle">
            <div class="toogle-circle">
              <i class="fa fa-circle"></i>
            </div>
          </div>
          <p class="toogle-p">New launches and projects
</p>
        </div>
        <div class="wrap1">
          <div class="toogle inverse-tog">
            <div class=" inverse-toogle-circle">
              <i class="fa fa-circle"></i>
            </div>
          </div>
          <p class="toogle-p">Monthly product updates
          </p>
        </div>
        <div class="wrap1">
          <div class="toogle inverse-tog">
            <div class="inverse-toogle-circle">
              <i class="fa fa-circle"></i>
            </div>
          </div>
          <p class="toogle-p">Subscribe to newsletter
          </p>
        </div>
      </div>
    </section>
  </section>

  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js'></script>
  <script src='./js/all.min.js'></script>
  <script>
    let dashboardToggle = document.querySelectorAll(".db-right-link");
    let toogleCircle = document.querySelectorAll(".toogle-circle");
    let circle = document.querySelector(".fa-circle");
    let toogle = document.querySelectorAll(".toogle");
    let inverseToogle = document.querySelectorAll(".inverse-tog");
    i = 0;
    inverseToogle.forEach(inversetlg => {
      inversetlg.onclick = () => {
        i++;
        let currentToogle = tlg.closest(".wrap1").querySelector(".inverse-toogle-circle");
        if (i % 2 == 0) {
          currentToogle.style.right = "3%";
          tlg.style.background = "lightgrey";
          tlg.style.border = "1px solid lightgrey";
        } else {
          currentToogle.style.right = "57%";
          tlg.style.background = "#434148";
          tlg.style.border = "1px solid #434148";
        }
      }
    });
    toogle.forEach(tlg => {
      tlg.onclick = () => {
        i++;
        let currentToogle = tlg.closest(".wrap1").querySelector(".toogle-circle");
        if (i % 2 == 0) {
          currentToogle.style.right = "57%";
          tlg.style.background = "#434148";
          tlg.style.border = "1px solid #434148";
        } else {
          currentToogle.style.right = "8%";
          tlg.style.background = "lightgrey";
          tlg.style.border = "1px solid lightgrey";
        }
      }
    });
    dashboardToggle.forEach(toggle => {
      toggle.onclick = (e) => {
        e.preventDefault();
        dashboardToggle.forEach(element => {
          element.classList.remove("active-db-link");
        });
        toggle.classList.add("active-db-link");
      };
    });
  </script>

</body>

</html>