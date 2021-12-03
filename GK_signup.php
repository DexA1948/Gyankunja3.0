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
    <link rel="stylesheet" type="text/css" href="GK_signup.css">

    <title>Gyankunja-Signup</title>
</head>

<?php
//If user is already logged in then they must logout to signup
require "GK_isloggedin.php";
if (isloggedin()) {
    echo "Hello " . $_SESSION["email"] . "<br>Your are logged in. Head to <a href=\"GK_userprofile.php\">profile page</a>";
} else {
?>

    <body>

        <!-- PHP Validation for all fields -->
        <?php require "GK_signupvalidation.php"; ?>

        <!-- this is gyan kuja ko anda -->
        <a href="GK_homepage.php"> <img class="logo" src="images/logo/Gyan Kunj-12.png"></a>

        <img class="backgroundimg" src="images/bg signup.jpg">

        <div class="container">

            <!-- form start -->
            <div class="my-form">

                <div class="signup center">
                    <h2>SignUp</h2>
                </div><br>

                <!-- main form -->
                <form name="GK_signup" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return validateForm()" method="post">

                    <!-- Fullname -->
                    <div class="single-input">
                        <span><i class="fas fa-user"></i></span>
                        <input type="text" name="name" value="<?php echo $name; ?>" placeholder="  Fullname" required>
                    </div>
                    <div class="errorSpace" id="errorName"><?php echo $nameErr; ?></div>

                    <!-- Email -->
                    <div class=" single-input">
                        <span><i class="fa fa-paper-plane"></i></span>
                        <input type="text" name="email" value="<?php echo $email; ?>" placeholder="  Email Address" required>
                    </div>
                    <div class="errorSpace" id="errorEmail"><?php echo $emailErr; ?></div>

                    <!-- Phone -->
                    <div class=" single-input">
                        <span><i class="fas fa-phone"></i></span>
                        <input type="text" name="phoneno" value="<?php echo $phoneno; ?>" placeholder="  Phone Number" required>
                    </div>
                    <div class="errorSpace" id="errorNumber"><?php echo $phonenoErr; ?></div>

                    <!-- DOB -->
                    <div class=" single-input">
                        <span><i class="far fa-calendar-alt"></i></span>
                        <input type="date" name="dob" value="<?php echo $dob; ?>" required>
                    </div>
                    <div class="errorSpace" id="errorDOB"><?php echo $dobErr; ?></div>

                    <!-- Other Info -->
                    <div class=" single-input">
                        <span><i class="fas fa-file-alt"></i></span>
                        <input type="text" name="otherinfo" value="<?php echo $otherinfo; ?>" placeholder="  Other Info">
                    </div>
                    <div class="errorSpace" id="errorInfo"><?php echo $otherinfoErr; ?></div>

                    <!-- Password -->
                    <div class=" single-input">
                        <span><i class="fas fa-lock"></i></span>
                        <input type="password" name="password" placeholder="  Password" required>
                    </div>
                    <div class="errorSpace" id="errorPassword"><?php echo $passwordErr; ?></div>

                    <!-- Terms of use -->
                    <div class="form-check center">
                        <input type="checkbox" name="terms" id="terms">
                        <label class="center"> I accept the <a href="terms.txt">Terms of use &nbsp;</a>& <a href="policy.txt">&nbsp; Privacy Policy.</a> </label>
                    </div>
                    <div class="errorSpace" id="errorTerms"><?php echo $termsErr; ?></div>

                    <!-- Submit Button -->
                    <button class="button" type="submit" name="submit" value="Sign Up">Sign Up</button>

                    <!--Login Link  -->
                    <span> <h6 class="center" style="color: black;">Already have an account? <a href="GK_login.php">Login Here</a>. </h6> </span>

                </form>
            </div>
        </div>
    </body>

    <!-- Closing the php } for 'if{' above -->
<?php } ?>

</html>