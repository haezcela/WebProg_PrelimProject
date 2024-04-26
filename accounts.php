<?php
session_start();

// Check if user_info is set in session
if (isset($_SESSION['user_info'])) {
    $userInfo = $_SESSION['user_info'];
} else {
    // If user_info is not set, redirect back to signup page
    header("Location: signup.php");
    exit;
}

// Unset user_info from session to clear it after displaying
unset($_SESSION['user_info']);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>User Information</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="fonts/fonts.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        .profile-pic {
            width: 2in;
            height: 2in;
        }
    </style>
</head>

<body>

    <?php require_once 'includes/header.php'; ?>


    <div class="container p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h3>User Information</h3>
                </div>

                <div class="text-center p-3">
                <img src="uploads/<?php echo $userInfo['profile_picture']; ?>" alt="Profile Picture"
                                        class="profile-pic rounded-circle">
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Username</td>
                                <td><?php echo $userInfo['username']; ?></td>
                                
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo $userInfo['email']; ?></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><?php echo $userInfo['password']; ?></td>
                            </tr>
                            <tr>
                                <td>First Name</td>
                                <td><?php echo $userInfo['first_name']; ?></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><?php echo $userInfo['last_name']; ?></td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td><?php echo $userInfo['dob']; ?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td><?php echo $userInfo['gender']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'includes/footer.php'; ?>

</body>

</html>
