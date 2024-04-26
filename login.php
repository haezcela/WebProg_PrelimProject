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


<?php
session_start();

// Sample hardcoded valid usernames and passwords
$valid_users = array("Austin", "jkjnmx");
$valid_passwords = array("OhAustin02", "jkjjkj");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password match
    if (in_array($username, $valid_users) && in_array($password, $valid_passwords)) {
        $_SESSION['username'] = $username;
        header("Location: index.php"); // Redirect to homepage after successful login
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>



<?php require_once 'includes/header.php'; ?>

<div class="container p-5">

    <div class="row">
        <!-- Left column for registration form -->
    <div class="col-md-6">
    <div class="text-center p-5">
                    <h1>Welcome to TrooLife!</h1>
                    <p>Please enter your information to login.</p>
                </div>
        
    <form action="login.php" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-success col-12 mb-4">Login</button>
    </form>
    <div class="mb-5">

    <button onclick="window.location.href='register.php'" class="btn btn-outline-success col-12 mb-5">Register</button>
    </div>
    
        </div>
        <!-- Right column for picture -->
        <div class="col-md-6">
            <div class="text-center">
                <img src="images/forms.jpg" class="img-fluid" alt="Profile Picture">
            </div>
        </div>
    </div>
</div>



<?php require_once 'includes/footer.php'; ?>

</body>
</html>