<?php
session_start();

// Check if user is not logged in or session is destroyed, redirect to login page
if (!isset($_SESSION['username'])) {
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
                    <div class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <strong><?php echo $_SESSION['username']; ?></strong>
                    </div>
                    <!--LOGOUT -->
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="login.php">Logout</a></li>
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

    <!--VIDEO BANNER-->
    <div class="video-container">
        <video id="myVideo" autoplay muted loop playsinline>
            <source src="images/sky.mp4" type="video/mp4" />
        </video>
        <div class="banner text-center" id="banner">
            <h1>Tr<span class="cream-underline">oo</span>life is dedicated to enhancing the quality and longevity of
                lives.
            </h1>
            <!--GO TO ABOUT US PAGE-->
            <a href="about.php">
                <img src="images/findOut.png" alt="Find Out More" />
            </a>

        </div>
    </div>


    <!--OUR MISSION-->
    <div class="our-Mission py-5" id="our-Mission">
        <h1 class="mission-heading underline far">Our Mission</h1>
        <p class="mission-text">
            Our TrooLife mission is to empower Members to make a true difference in their own personal health, wellness
            and longevity. For them to enhance their own quality of life, and then to inspire a better quality of life
            for their family, friends and associates.
        </p>
    </div>
    </div>

    <!--SECTION-->

    <div class="section">

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

        <div class="container-reponsive white-div">
            <div class="row p-2">
                <div class="col-md-5 text-left p-1 m-0  align-self-center">
                    <img src="images/stock-photo-happy-couple-riding-bicycles-outside-healthy-lifestyle-fun-concept-72007540 1.png"
                        alt="Placeholder Image" class="img-fluid rounded-picture-right" />
                </div>

                <div class="col-md-7 p-5 align-self-center">
                    <h2 class="right">Health experts say</h2>
                    <p class="section-text-right">
                        we should have five servings or fresh fruits and vegetables every day, however this is not
                        practical or possible for most active adults. This is why these same experts recommend
                        supplementing your diet with high-quality vitamins, minerals, antioxidants and amino acids to
                        help provide optimal health, vitality and mental clarity.
                    </p>
                </div>
            </div>
        </div>

        <div class="container-responsive cream-div m-0 p-0">
            <div class="row py-2 d-flex flex-column-reverse flex-md-row">
                <div class="col-md-7 p-5 align-self-center">
                    <h2 class="left">Through our Lifeline program,</h2>
                    <p class="section-text-left">
                        TrooLife will act as your personal wellness coach, encouraging you to eat well, to maintain a
                        healthy activity level and to help you de-stress from your work and family pressures. LifeLine
                        will also advise you on how to optimize your important personal relationships with your family,
                        friends and associates, to enhance your own life, and theirs.
                    </p>
                </div>
                <div class="col-md-5 text-left order-1 align-self-center">
                    <img src="images/stock_photo_3.png" alt="Placeholder Image"
                        class="img-fluid rounded-picture-left" />
                </div>
            </div>
        </div>


        <div class="container-reponsive white-div">
            <div class="row p-2">
                <div class="col-md-5 text-left p-1 m-0 mt-md-5 pt-md-5 align-self-center">
                    <img src="images/pic-4.png" alt="Placeholder Image" class="img-fluid rounded-picture-right" />
                </div>

                <div class="col-md-7 p-5 align-self-center">
                    <h2 class="right">TrooLife is also committed</h2>
                    <p class="section-text-right ">
                        to providing you excellent product quality and value, with the means to receive your nutritional
                        supplements and wellness coaching for free, from a few simple referrals. Please take a few
                        minutes to find out how.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col text-center p-5 mb-5"> <img src="images/getStarted.png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </div>

    <!--LIFELINE-->
    <div class="green-div p-5" id="lifeline">
        <h1 class=" text-center mb-5">Realize Your True Life Potential</h1>

        <div class="row justify-content-center">

            <div class="col-md-3">
                <div class="card-content text-center"> <img class="img-fluid my-3" src="images/coaching.png"
                        alt="Coaching Image" />
                    <h5 class="card-title lh-sm pb-3">LifeLine Wellness Coaching</h5>
                    <img src="images/learnMore.png" class="img-fluid" id="lifeline" alt="" />
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-content text-center">
                    <img class="img-fluid my-3" src="images/19-Healthcare.png" alt="Nutritional Health" />
                    <h5 class="card-title pb-5">Nutritional Health</h5>
                    <img src="images/learnMore.png" class="img-fluid" alt="" />
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-content text-center">
                    <img class="img-fluid my-3" src="images/benefits.png" alt="Referral Benefits" />
                    <h5 class="card-title pb-5">Referral Benefits</h5>
                    <img src="images/learnMore.png" class="img-fluid" alt="" />
                </div>
            </div>

        </div>
    </div>

    <?php require_once 'includes/footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>
