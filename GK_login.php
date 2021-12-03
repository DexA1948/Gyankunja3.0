<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" type="text/css" href="GK_login.css">

    <title>Gyankunja-Login</title>
</head>

<?php
//If user is already logged in then cannot login again
require "GK_isloggedin.php";
if (isloggedin()) {
    echo "Hello " . $_SESSION["email"] . "<br>Your are logged in. Head to <a href=\"GK_userprofile.php\">profile page</a>";
} else {
?>

    <body class="background">

        <!-- PHP Validation: Inserts code here, Form Validation + Email and Password Check -->
        <?php require "GK_loginvalidation.php"; ?>

        <div class="container">
            <a href="GK_homepage.php"> <img class="logo" src="images/logo/Gyan Kunj-12.png"></a>
            <img class="backgroundimg" src="images/bg login.png">

            <!-- form start -->
            <div class="my-form">
                <!-- <img class="mobileviewlogo" src="images/logo/Gyan Kunj-12.png"> -->

                <div>
                    <div>
                        <h3>Login </h3>
                    </div>
                </div>

                <!-- main form -->
                <form name="GK_login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                    <!-- Email -->
                    <div class="single-input">
                        <span><i class="fas fa-user"></i></span>
                        <input type="text" name="email" value="<?php echo $email; ?>" placeholder="   Email or phone" required>
                    </div>
                    <div class="errorSpace" id="errorEmail"><?php echo $emailErr; ?></div>

                    <!-- Password -->
                    <div class="single-input">
                        <span><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" placeholder="  Password" required>
                    </div>
                    <div class="errorSpace" id="errorPassword"><?php echo $passwordErr; ?></div>

                    <!-- Forgot Password -->
                    <a href="forget.php" class="center">Forgot Password?</a>

                    <!-- Submit Button -->
                    <button class="button button1" type="submit" name="submit" value="Login">Login</button><br><br>

                    <!-- Signup Link -->
                    <span>
                        <h4>Not a member? <a href="GK_signup.php">Signup Now</a>.</h4>
                    </span>

                </form>
            </div>
        </div>
        <!-- <div class="mobileview"><a href="Gyan-kunja.html"> Skip to Home </a></div> -->
    </body>

    <!-- Closing the php } for 'if{' above -->
<?php } ?>

</html>