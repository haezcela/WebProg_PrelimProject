<?php
session_start();

// Logout functionality
if(isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Prelim Project</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="fonts/fonts.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

</head>

<body>

<?php require_once 'includes/header.php'; ?>

<!-- MEMBER-BLOCK -->
<div class="member-block">
    <ul class="nav flex-fill">
        <li class="nav-item">
            <img src="images\Ellipse.png" alt="" />
        </li>
        <li class="nav-item text-wrapper">
            <?php if(isset($_SESSION['username'])): ?>
                <div class="dropdown">
                    <div class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <strong><?php echo $_SESSION['username']; ?></strong>
                    </div>
                    <!--LOGOUT -->
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="?logout=1">Logout</a></li>
                    </ul>
                </div>
            <?php else: ?>
                <a class="nav-link" href="#"><strong class="text-black">Guest</strong></a>
            <?php endif; ?>
        </li>
    </ul>

    <ul class="nav flex-fill justify-content-end">
        <li class="nav-item text-wrapper">
            <img src="images\call.png" alt="" />
        </li>
        <li class="nav-item text-wrapper">
            <img src="images\message.png" alt="" />
        </li>
    </ul>
</div>

<div class="white-div p-5 about-section" id="troolife">
    <h1 class="text-center mb-5 fade show">About Us</h1>


    <div class="row justify-content-center">

          <div class="col-md-3">
          <div class="card-content text-center fade show">
            <!-- Replace the <img> tag with the SVG code -->
            <svg class="img-fluid my-3 custom-svg" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg" width="100" height="100"">
              <path d="M104.644 89.192a1.75 1.75 0 0 0-1.222-1.631c-6.161-1.949-10.77-3.807-12.969-4.74a1.755 1.755 0 0 0-1.368 0c-2.2.934-6.811 2.792-12.969 4.74A1.743 1.743 0 0 0 75 88.631a27.355 27.355 0 0 0-3.272-1.185 13.769 13.769 0 0 0-5.978-25.063V41.069a10.928 10.928 0 0 1 9.17 10.766 1.75 1.75 0 0 0 3.5 0 10.917 10.917 0 0 1 21.83-.274 1.751 1.751 0 0 0 1.749 1.7h.039a1.751 1.751 0 0 0 1.712-1.78 39.756 39.756 0 0 0-79.5 0 1.751 1.751 0 0 0 1.712 1.78H26a1.751 1.751 0 0 0 1.749-1.7 10.916 10.916 0 0 1 21.761-.938c0 .055.007.11.014.165a8.5 8.5 0 0 1 .057 1.047 1.75 1.75 0 0 0 3.5 0 10.928 10.928 0 0 1 9.17-10.766v21.314a13.769 13.769 0 0 0-5.988 25.058 27.563 27.563 0 0 0-19.781 26.4 1.751 1.751 0 0 0 1.75 1.75h51.537a1.785 1.785 0 0 0 .334-.034 1.386 1.386 0 0 0 .134-.038c.053-.015.107-.025.159-.044l.042-.018.023-.01c6.629-2.567 11.018-7.9 13.042-15.869a39.659 39.659 0 0 0 1.141-10.386zm-6.326-48.674a14.453 14.453 0 0 0-20.23 2.319c-.681-7.883-2.72-19.661-8.738-26.526a36.568 36.568 0 0 1 28.968 24.207zm-59.658-3.1a14.381 14.381 0 0 0-8.978 3.1A36.568 36.568 0 0 1 58.65 16.311c-6.01 6.857-8.052 18.614-8.736 26.5a14.379 14.379 0 0 0-11.254-5.395zm14.872 4.515C54.393 33.327 56.874 20.905 64 16.2c7.125 4.708 9.607 17.13 10.468 25.734a14.392 14.392 0 0 0-20.936 0zm.184 34.111A10.284 10.284 0 1 1 64 86.326a10.3 10.3 0 0 1-10.284-10.284zM64 89.826a24.026 24.026 0 0 1 10.958 2.653 38.112 38.112 0 0 0 1.076 7.1c1.37 5.39 3.828 9.573 7.325 12.513H40.044A24.051 24.051 0 0 1 64 89.826zm36.111 8.893c-1.669 6.565-5.147 11.015-10.342 13.238-5.2-2.223-8.674-6.673-10.342-13.238a36.088 36.088 0 0 1-1.037-8.212c5.128-1.665 9.1-3.229 11.379-4.177 2.277.947 6.249 2.511 11.379 4.177a36.1 36.1 0 0 1-1.037 8.212z"/>
              <path d="M86.142 96.909a1.75 1.75 0 0 0-2.5 2.445l3.246 3.326a1.75 1.75 0 0 0 1.251.527 1.75 1.75 0 0 0 1.25-.525l6.511-6.651a1.75 1.75 0 1 0-2.5-2.449l-5.259 5.372z"/>
            </svg>
          <h5 class="card-title pb-3">Enhancing Quality of Life</h5>
          <p>At Troolife, we're dedicated to improving lives by empowering our members to enhance their health, wellness, and longevity. Explore how our personalized approach can help you live a more fulfilling life.</p>
          <img class="img-fluid" alt="" />
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-content text-center">
          <svg class="img-fluid my-3 custom-svg" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg" width="100" height="100"><path d="M113.854 64.046H102.2l.484-.483a21.724 21.724 0 0 0-30.723-30.722L64 40.8l-7.961-7.961a21.724 21.724 0 1 0-30.723 30.724l.484.483H14.146a1.75 1.75 0 0 0 0 3.5H29.3l33.463 33.463a1.748 1.748 0 0 0 2.474 0L98.7 67.546h15.154a1.75 1.75 0 0 0 0-3.5zm-86.063-2.958a18.224 18.224 0 0 1 25.773-25.773l9.2 9.2a1.8 1.8 0 0 0 2.474 0l9.2-9.2a18.224 18.224 0 0 1 25.773 25.773l-2.958 2.958h-19.42a1.751 1.751 0 0 0-1.552.942l-2.7 5.188-4.82-12.643a1.751 1.751 0 0 0-1.636-1.127h-.009a1.751 1.751 0 0 0-1.633 1.142l-5.31 14.357-5.217-20.378a1.75 1.75 0 0 0-3.328-.2l-4.9 12.714H30.749zM64 97.3 34.249 67.546H47.93a1.748 1.748 0 0 0 1.632-1.12l3.362-8.726 5.249 20.5a1.75 1.75 0 0 0 1.6 1.313h.092a1.75 1.75 0 0 0 1.641-1.142l5.639-15.245 4.544 11.929a1.753 1.753 0 0 0 1.535 1.124 1.729 1.729 0 0 0 1.653-.939l4.014-7.7h14.86z"/></svg>
          <h5 class="card-title pb-3">Personalized Wellness Coaching</h5>
          <p>Welcome to LifeLine, your personal wellness coach at Troolife. We're here to support your journey to better health and well-being. Let LifeLine guide you to your best life.</p>
          <img class="img-fluid" alt="" />
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-content text-center">
          <svg class="img-fluid my-3 custom-svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 128 128"><path d="M110.242 30.143a1.747 1.747 0 0 0-1.232-1.487 403.97 403.97 0 0 1-44.289-16.1 1.744 1.744 0 0 0-1.442 0 403.97 403.97 0 0 1-44.289 16.1 1.747 1.747 0 0 0-1.232 1.487 113.457 113.457 0 0 0 2.912 35.942c6.257 25.127 21.05 42.22 42.779 49.43a1.75 1.75 0 0 0 1.1 0c21.729-7.21 36.522-24.3 42.779-49.43a113.457 113.457 0 0 0 2.914-35.942zm-6.309 35.1C97.949 89.271 84.515 105 64 112.007c-20.487-7-33.912-22.694-39.909-46.672a113.508 113.508 0 0 1-2.949-33.676A415.982 415.982 0 0 0 64 16.06a416.235 416.235 0 0 0 42.858 15.6 113.251 113.251 0 0 1-2.925 33.579z"/><path d="M101.339 34.655c-17.382-5.5-30.426-10.754-36.655-13.4a1.755 1.755 0 0 0-1.368 0c-6.229 2.643-19.273 7.9-36.655 13.4a1.751 1.751 0 0 0-1.222 1.632 107.982 107.982 0 0 0 3.1 28.293c5.43 21.36 17.149 35.63 34.832 42.414a1.753 1.753 0 0 0 1.254 0C82.31 100.21 94.029 85.94 99.459 64.58a107.99 107.99 0 0 0 3.1-28.293 1.751 1.751 0 0 0-1.22-1.632zm-5.273 29.063C91 83.656 80.211 97.031 64 103.481c-16.211-6.45-27-19.825-32.066-39.763A105.715 105.715 0 0 1 28.92 37.61C45.235 32.4 57.629 27.453 64 24.769c6.371 2.684 18.765 7.631 35.08 12.841a105.725 105.725 0 0 1-3.014 26.108z"/><path d="M84 53.25H71.75V41A1.751 1.751 0 0 0 70 39.25H58A1.751 1.751 0 0 0 56.25 41v12.25H44A1.751 1.751 0 0 0 42.25 55v12A1.751 1.751 0 0 0 44 68.75h12.25V81A1.751 1.751 0 0 0 58 82.75h12A1.751 1.751 0 0 0 71.75 81V68.75H84A1.751 1.751 0 0 0 85.75 67V55A1.751 1.751 0 0 0 84 53.25zm-1.75 12H70A1.751 1.751 0 0 0 68.25 67v12.25h-8.5V67A1.751 1.751 0 0 0 58 65.25H45.75v-8.5H58A1.751 1.751 0 0 0 59.75 55V42.75h8.5V55A1.751 1.751 0 0 0 70 56.75h12.25z"/></svg>
          <h5 class="card-title pb-3">Optimal Nutrition</h5>
          <p>
Troolife's premium supplements promote vitality. Explore our diverse range to start your journey to optimal health. Our products are meticulously designed to nourish well-being and elevate life quality.</p>

          <img class="img-fluid" alt="" />
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-content text-center">
          <svg class="img-fluid my-3 custom-svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"width="100" height="100" viewBox="0 0 128 128"><path d="M115.36 73.961a3.248 3.248 0 0 0-3.02-2.031h-1.664a16.539 16.539 0 0 0-8.056 2.1l-12.128 6.781h-3.418a9.622 9.622 0 0 0-9.446-7.857H55.769a1.751 1.751 0 0 0-1.337.621l-6.593 7.814a1.738 1.738 0 0 0-1.292-.578h-32.4a1.75 1.75 0 0 0 0 3.5h20.86v24.438H14.146a1.75 1.75 0 0 0 0 3.5h32.4a1.749 1.749 0 0 0 1.75-1.75v-8.166l34.849-1.6c.034 0 .069 0 .1-.007a24.693 24.693 0 0 0 14.6-6.849l16.771-16.354a3.246 3.246 0 0 0 .744-3.562zM44.8 108.749h-6.294V84.311H44.8zm50.6-17.378a21.172 21.172 0 0 1-12.468 5.868L48.3 98.83V86.274l8.285-9.82h21.043a6.113 6.113 0 0 1 5.954 4.772l-17.3 4.246a1.749 1.749 0 1 0 .834 3.4l18.574-4.559h5.254a1.747 1.747 0 0 0 .854-.223l12.526-7a13.041 13.041 0 0 1 6.348-1.654h1.074zM81.353 66.446a1.753 1.753 0 0 0 1.1 0c25.553-8.477 22.328-41.13 22.293-41.459a1.751 1.751 0 0 0-1.233-1.486 190.6 190.6 0 0 1-20.891-7.6 1.752 1.752 0 0 0-1.442 0 190.179 190.179 0 0 1-20.891 7.6 1.75 1.75 0 0 0-1.232 1.486c-.033.329-3.257 32.982 22.296 41.459zM62.461 26.5A200.4 200.4 0 0 0 81.9 19.412a200.509 200.509 0 0 0 19.447 7.088c.28 5.509.313 29.447-19.443 36.439C62.149 55.944 62.181 32.006 62.461 26.5z"/><path d="M79.05 51.725a4.465 4.465 0 0 0 3.169-1.332L95.483 36.85a4.435 4.435 0 0 0-.065-6.273 4.632 4.632 0 0 0-3.149-1.266 4.4 4.4 0 0 0-3.123 1.332l-10.088 10.3-3.441-3.526a4.436 4.436 0 0 0-6.349 6.2l6.611 6.773a4.472 4.472 0 0 0 3.171 1.335zm-7.261-11.877a.927.927 0 0 1 .653-.266h.012a.931.931 0 0 1 .658.282l4.688 4.807a1.748 1.748 0 0 0 1.251.527 1.75 1.75 0 0 0 1.25-.525l11.346-11.582a.935.935 0 1 1 1.335 1.309L79.721 47.943a.968.968 0 0 1-1.338 0l-6.611-6.773a.937.937 0 0 1 .017-1.322z"/></svg></g></svg>
          
          <h5 class="card-title pb-3">Referral Benefits</h5>
          <p>Join Troolife and start enjoying benefits today. With our referral program, receive free nutritional supplements and wellness coaching. Share health with friends and family, unlock true life potential with Troolife.</p>
          <img class="img-fluid" alt="" />
        </div>
      </div>

    </div>
  </div>



    <!--SECTION-->

    <div class="section">


<div class="container-responsive cream-div m-0 p-0">
  <div class="row py-2 d-flex flex-column-reverse flex-md-row">
    <div class="col-md-7 p-5 align-self-center">
      <h2 class="left">Our History</h2>
      <p class="section-text-left">
      Established in 2010, TrooLife began as a wellness startup aiming to revolutionize health. With innovative solutions and a dedicated team, we've grown into a trusted name in personalized wellness. Today, we continue to empower individuals worldwide to live healthier, more fulfilling lives.
        </p>
    </div>
    <div class="col-md-5 text-left order-1 align-self-center">
      <img src="images/team.jpg" alt="Placeholder Image" class="img-fluid rounded-picture-left" />
    </div>
  </div>
</div>


<div id="testimonialCarousel" class="carousel slide p-5" data-bs-ride="carousel">


  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="carousel-content text-center">
        <img src="images/testimonypic.jpg" class="rounded-circle img-fluid mb-3" alt="Profile Picture">
        <h4>John Doe</h4>
        <p class="lead">"TrooLife's service has changed my life! I feel healthier and more energized than ever before. Highly recommended!"</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-content text-center">
        <img src="images/testimonypic.jpg" class="rounded-circle img-fluid mb-3" alt="Profile Picture">
        <h4>Chan Smith</h4>
        <p class="lead">"I never thought I could achieve my fitness goals until I joined TrooLife. Their personalized approach made all the difference."</p>
      </div>
    </div>
    <div class="carousel-item">
      <div class="carousel-content text-center">
        <img src="images/testimonypic.jpg" class="rounded-circle img-fluid mb-3" alt="Profile Picture">
        <h4>Michael Johnson</h4>
        <p class="lead">"Thanks to TrooLife, I now have the tools and support I need to live a healthier lifestyle. I'm grateful for their guidance!"</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

<div class="container-responsive green-div">
            <div class="row py-2 d-flex flex-column-reverse flex-md-row">
                <div class="col-md-7 p-5 align-self-center pl-4">
                    <h2 class="left"> <strong>The things you consistently do</strong> </h2>
                    <p class="section-text-left">
                        to enhance your mind, your body, your relationships and your finances – will enhance your quality
                        of life -
                        and the quality of your extended life.
                    </p>
                    <p class="section-text-left">Also be aware that the things that you do not bother to do for your
                        mind, body, relationships and finances – will reduce your quality of life.

                    </p>
                </div>
                <div class="col-md-5 text-left order-1 align-self-center py-2 pl-4">
                    <img src="images/stock-photo-relationship-asian-generation-woman-diverse-friendship-and-lgbt-healthy-in-group-class-exercise-2024040476 2.png"
                        alt="Placeholder Image" class="img-fluid rounded-picture-left" />
                </div>
            </div>
        </div>



  
  </div>
</div>
</div>

<?php require_once 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
