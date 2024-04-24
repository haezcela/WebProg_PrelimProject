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


<div class="container p-5">
    <div class="row">
        <!-- Left column for registration form -->
    <div class="col-md-6">
        
    <form action="signup.php" method="post" enctype="multipart/form-data">

    <div class="row mb-3">
                    <div class="col-5">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
                    <div class="col-7">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
                    </div>

    
        
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>


        <div class="row mb-3">
                    <div class="col-7">
                    <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required>
        </div>
                    <div class="col-5">
                    <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" required>
        </div>
                    </div>


                    <div class="row mb-3">
                    <div class="col">
                    <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    <div class="col">
                    <label class="form-label">Gender</label>
                    
                    <div class="row">
                    <div class="col">
                    <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                <label class="form-check-label" for="male">Male</label>
            </div>
                    </div>
                    <div class="col">
                    <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                <label class="form-check-label" for="female">Female</label>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>

        <div class="mb-3">
            <label for="profile_picture" class="form-label">Profile Picture</label>
            <input type="file" class="form-control" id="profile_picture" name="profile_picture" accept="image/jpeg,image/png" required>
        </div>

                    
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
        </div>
        <!-- Right column for picture -->
        <div class="col-md-6">
            <div class="text-center">
                <img src="images/forms.jpg" class="img-fluid" alt="Profile Picture">
            </div>
        </div>
    </div>
</div>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission
    // Validate and process the form data
    // Save profile picture to /uploads folder
    // Display user information on a new page
}
?>


<?php require_once 'includes/footer.php'; ?>


</body>
</html>