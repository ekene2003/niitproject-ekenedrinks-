<?php
require_once('./includes/header.php');

?>

<body class="dashboard-body">
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
          <div class="inverse-tog">
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
          <p class="toogle-p">New launches and projects</p>
        </div>
        <div class="wrap1">
          <div class="inverse-tog">
            <div class="inverse-toogle-circle">
              <i class="fa fa-circle"></i>
            </div>
          </div>
          <p class="toogle-p">Monthly product updates
          </p>
        </div>
        <div class="wrap1">
          <div class="inverse-tog">
            <div class="inverse-toogle-circle">
              <i class="fa fa-circle"></i>
            </div>
          </div>
          <p class="toogle-p">Subscribe to newsletter
          </p>
        </div>
      </div>
    </section>
    <section class="profile-info">
      <div class="info-split">
          <h6 class="info-head mt-3">Profile Information
          </h6>
          <i class="fa fa-user info-user"></i>
      </div>
        <p class="info-p">Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
      </p>
    </section>
    <section class="details">
      <div class="fullname">
        <p class="name1">Full Name:</p>
        <p class="name2"> Lorem</p>
      </div>
      <div class="fullname">
        <p class="name1">Mobile:</p>
        <p class="name2"> (44) 123 1234 123</p>
      </div>
      <div class="fullname">
        <p class="name1">Email:</p>
        <p class="name2"> alecthompson@mail.com</p>
      </div>
      <div class="fullname">
        <p class="name1">Location:</p>
        <p class="name2"> USA</p>
      </div>
      <div class="social-detail">
        <div class="social-wrap">
          <div class="social-p"> 
            <p class="name1">Social:</p>
          </div>
          <div class="social-a-wrap">
           <a href="" class="social-a"></a><i class="fab fa-facebook"></i>
           <a href="" class="social-a"></a><i class="fab fa-twitter"></i>
           <a href="" class="social-a"></a><i class="fab fa-instagram"></i>
          </div>
        </div>
      </div>
    </section>
    <section class="coversations">
      <h5 class="conversations-head">Conversations</h5>
      <div class="convo-wrap">
        <div class="left">
          <div class="convo-img-wrap">
           <img class="convo-img" src="./assets/images/fcdb95c723bb3c656625ac71476f294b.jpg" alt="">
          </div>
          <div class="convo-details">
            <h5 class="convo-head">sophie.B</h5>
            <p class="convo-p">Hi! I need more information.</p>
          </div>
        </div>
        <div class="right">
          <h6 class="reply-btn">REPLY</h6>
        </div>
      </div>
      <div class="convo-wrap">
        <div class="left">
          <div class="convo-img-wrap">
           <img class="convo-img" src="./assets/images/c34f96faccfdb4d91375c0c220fffd89.jpg" alt="">
          </div>
          <div class="convo-details">
            <h5 class="convo-head">
Anne Marie</h5>
            <p class="convo-p">Awesome work, can you.</p>
          </div>
        </div>
        <div class="right">
          <h6 class="reply-btn">REPLY</h6>
        </div>
      </div>
      <div class="convo-wrap">
        <div class="left">
          <div class="convo-img-wrap">
           <img class="convo-img" src="./assets/images/20220419_191839.jpg" alt="">
          </div>
          <div class="convo-details">
            <h5 class="convo-head">Ivanna</h5>
            <p class="convo-p">About files I can.</p>
          </div>
        </div>
        <div class="right">
          <h6 class="reply-btn">REPLY</h6>
        </div>
      </div>
      <div class="convo-wrap">
        <div class="left">
          <div class="convo-img-wrap">
           <img class="convo-img" src="./assets/images/IMG_9630.JPEG" alt="">
          </div>
          <div class="convo-details">
            <h5 class="convo-head">Peterson</h5>
            <p class="convo-p">Have a great afternoon</p>
          </div>
        </div>
        <div class="right">
          <h6 class="reply-btn">REPLY</h6>
        </div>
      </div>
      <div class="convo-wrap">
        <div class="left">
          <div class="convo-img-wrap">
           <img class="convo-img" src="./assets/images/20220819_214524.jpg" alt="">
          </div>
          <div class="convo-details">
            <h5 class="convo-head">Nick Daniel</h5>
            <p class="convo-p">Hi! I need more information.</p>
          </div>
        </div>
        <div class="right">
          <h6 class="reply-btn">REPLY</h6>
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
    inverseToogle.forEach(tlg => {
      tlg.onclick = () => {
        i++;
        let currentToogle = tlg.closest(".wrap1").querySelector(".inverse-toogle-circle");
        if (i % 2 == 0) {
          currentToogle.style.right = "8%";
          tlg.style.background = "lightgrey";
          tlg.style.border = "1px solid lightgrey";
        } else {
          currentToogle.style.right = "57%";
          tlg.style.background = "#434148";
          tlg.style.border = "1px solid #434148";
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