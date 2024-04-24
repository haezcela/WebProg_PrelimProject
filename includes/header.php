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

      <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
      <!-- order -->
      <a class="navbar-brand order-lg-0 order-1 " href="#"><img class="img-fluid  px-4 py-1 py-md-3" src="images\logo.png" alt="" /></a>
      <button class="navbar-toggler mr-auto order 0 border-0" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse order-6" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0" id="centerli">

          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#our-Mission" style="text-decoration: underline; text-underline-offset: 10px;">Mission</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#lifeline">Lifeline</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#">Nutrition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#">Free by Referral</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#">Public Relations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#">Company</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#">Management</a>
          </li>
        </ul>
      </div>
      <div class="shoppingcart mr-auto order-lg-3 order-3">
        <a href="#" class="d-flex align-items-center text-white">

          <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M17.4552 13.2C18.3549 13.2 19.1467 12.708 19.5546 11.964L23.8494 4.176C23.9505 3.99411 24.0024 3.78897 23.9999 3.58087C23.9974 3.37277 23.9406 3.16893 23.8352 2.98951C23.7298 2.8101 23.5793 2.66134 23.3988 2.55794C23.2182 2.45455 23.0138 2.4001 22.8057 2.4H5.05061L3.92292 0H0V2.4H2.39934L6.71815 11.508L5.0986 14.436C4.22284 16.044 5.37452 18 7.19802 18H21.5941V15.6H7.19802L8.51766 13.2H17.4552ZM6.1903 4.8H20.7663L17.4552 10.8H9.03351L6.1903 4.8ZM7.19802 19.2C5.87838 19.2 4.81068 20.28 4.81068 21.6C4.81068 22.92 5.87838 24 7.19802 24C8.51766 24 9.59736 22.92 9.59736 21.6C9.59736 20.28 8.51766 19.2 7.19802 19.2ZM19.1947 19.2C17.8751 19.2 16.8074 20.28 16.8074 21.6C16.8074 22.92 17.8751 24 19.1947 24C20.5144 24 21.5941 22.92 21.5941 21.6C21.5941 20.28 20.5144 19.2 19.1947 19.2Z"
              fill="white" />
          </svg>
        </a>
      </div>
      <div class="vertical-line d-none d-sm-block order-lg-3 "></div>

      <div class="MyOffice d-none d-sm-block order-lg-4 order-5">
        <!-- Inline SVG icon -->

        <a href="#" class="d-flex align-items-center text-white">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M12 5.14286C11.1524 5.14286 10.3238 5.39421 9.61899 5.86513C8.91421 6.33605 8.36489 7.00539 8.04052 7.7885C7.71614 8.57161 7.63127 9.43332 7.79664 10.2647C7.962 11.096 8.37018 11.8597 8.96955 12.459C9.56891 13.0584 10.3326 13.4666 11.1639 13.6319C11.9952 13.7973 12.857 13.7124 13.6401 13.3881C14.4232 13.0637 15.0925 12.5144 15.5634 11.8096C16.0344 11.1048 16.2857 10.2762 16.2857 9.42857C16.2857 8.29193 15.8342 7.20184 15.0305 6.39811C14.2267 5.59439 13.1366 5.14286 12 5.14286Z"
              fill="#F6DBA0" />
            <path
              d="M12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21508 0.913451 7.4078C0.0051994 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.807 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0865C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6934 24 14.3734 24 12C23.9964 8.81851 22.7309 5.76838 20.4813 3.51873C18.2316 1.26908 15.1815 0.00362976 12 0ZM18.8503 19.6509C18.8332 18.5266 18.3751 17.454 17.5748 16.6642C16.7744 15.8744 15.6958 15.4307 14.5714 15.4286H9.42858C8.30416 15.4307 7.22558 15.8744 6.42522 16.6642C5.62487 17.454 5.1668 18.5266 5.14972 19.6509C3.59535 18.2629 2.4992 16.4356 2.00643 14.4109C1.51367 12.3861 1.64752 10.2594 2.39027 8.31245C3.13301 6.36546 4.44962 4.69 6.16575 3.50791C7.88188 2.32583 9.91658 1.69288 12.0004 1.69288C14.0843 1.69288 16.119 2.32583 17.8351 3.50791C19.5512 4.69 20.8678 6.36546 21.6106 8.31245C22.3533 10.2594 22.4872 12.3861 21.9944 14.4109C21.5017 16.4356 20.4047 18.2629 18.8503 19.6509Z"
              fill="#F6DBA0" />
          </svg>

          My Office</a>
      </div>
      <div class="dropdown order-lg-5 order-3">

        <a href="#" class="d-flex align-items-center text-white dropdown-toggle" data-bs-toggle="dropdown">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_535_106)">
              <path
                d="M12 23C18.075 23 23 18.075 23 12C23 5.925 18.075 1 12 1M12 23C5.925 23 1 18.075 1 12C1 5.925 5.925 1 12 1M12 23C15 23 16 18 16 12C16 6 15 1 12 1M12 23C9 23 8 18 8 12C8 6 9 1 12 1M2 16H22M2 8H22"
                stroke="#F6DBA0" stroke-width="2" />
            </g>
            <defs>
              <clipPath id="clip0_535_106">
                <rect width="24" height="24" fill="white" />
              </clipPath>
            </defs>
          </svg>
          English
        </a>
        <ul class="dropdown-menu ">
          <li><a href="#" class="dropdown-item">Spanish</a></li>
          <li><a href="#" class="dropdown-item">French</a></li>
          <li><a href="#" class="dropdown-item">Chinese</a></li>
        </ul>
      </div>
    </div>
  </nav>


</body>
</html>