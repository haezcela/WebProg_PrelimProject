<?php
session_start();
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






<?php require_once 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



</body>
</html>