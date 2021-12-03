<?php
session_start();

if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
}

// Users can only visit this page if they are logged in
require "GK_isloggedin.php";
if (!isloggedin()) {
    echo "You aren't logged in. <br> Already have an account? <a href=\"GK_login.php\">Login Here</a>.<br>Not a member? <a href=\"GK_signup.php\">Signup Now</a>.";
} else {
?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="GK_homepage.css">


        <title>Gyankunja-<?php echo $_SESSION["email"] ?></title>
    </head>

    <body class="background">
        <!-- Back to top button -->
        <button onclick="topFunction()" id="myBtn" class="fa fa-angle-double-up"></button>

        <!--Top navigation bar-->
        <nav class=" navbar  sticky-lg-top  navbar-expand-lg navbar-light bg-light" style="padding: 0%;">
            <div class="container-fluid nav-color" style="background-color:   rgb(110, 110, 255); ">
                <a class="navbar-brand" href="about_gyankunja.php"></a>
                <img class="navlogo" src="images/logo/Gyan Kunj-12.png">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link hover" id="text" aria-current="page" href="Gyan-kunja.html" style="color:black; font-size:x-large;"><i class="fa fa-home fa-2x  " style=" font-size:medium;"></i>Home</a>
                        </li>
                        <li>
                            <a class="nav-link  hover" href="Discussionhub.html" id="text">Discussion
                                Hub</a>
                        </li>
                        <li>
                            <a class="nav-link  hover" href="#" id="text">My Resources</a>
                        </li>
                        <li>
                            <a class="nav-link hover" href="#" style=" color:black; font-size:x-large;">Profile</a>
                        </li>

                    </ul>


                    <form class="d-flex">
                        <input class="form-control me-2 " id="border" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn myBtn " id="border" type="submit">Search</button>
                    </form>

                </div>
            </div>
        </nav>

        <span>
            <img class="propic" style="border: 2px solid black;" src="images/asha.jpg">
        </span>

        <!-- User Details -->
        <div id="details">
            <table>
                <tr>
                    <th>Name:</th>
                    <td>Asha Bista</td>
                </tr>
                <tr>
                    <th>
                        Email:
                    </th>
                    <td>asha@asha.com</td>
                </tr>
                <tr>
                    <th>
                        Date of Birth:
                    </th>
                    <td>2030/07/28</td>
                </tr>
                <tr>
                    <th>
                        Phone no:
                    </th>
                    <td>9876345273</td>
                </tr>
            </table>
        </div>

        <div id="profile">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam optio illo inventore est quae minus libero quam officia maiores. Distinctio, voluptatum cum molestias dicta fuga nisi pariatur eos maxime ab voluptates? Tempore libero aliquam, ducimus,
            illo aspernatur obcaecati nesciunt facilis nobis sunt consequatur fuga velit voluptatem eum! Laboriosam quis architecto atque est maxime! Nobis repudiandae adipisci mollitia suscipit nemo soluta dolorem? Ullam, laborum. Molestiae temporibus et
            qui mollitia aliquam deleniti rerum placeat quidem in quaerat dolorum possimus magnam aspernatur ad esse voluptate eveniet culpa dolores deserunt cupiditate numquam, consectetur nesciunt! Sapiente quae nesciunt modi non molestias voluptatum consequatur
            accusantium sit.
        </div>


        <!--General-->
        <h1>General</h1>

        <div class="row">
            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/notes.png" class="card-img-top myDIV" alt="...">
                        <!-- <div class="centered"></div> -->

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/notes.png" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/notes.png" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/notes.png" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>
        </div>

        <!--Images-->
        <h1>Images</h1>

        <div class="row">
            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/image.jpg" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/image.jpg" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/image.jpg" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/image.jpg" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>
        </div>

        <!--Videos-->
        <h1>Videos</h1>

        <div class="row">
            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/videos.jpg" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/videos.jpg" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/videos.jpg" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/videos.jpg" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>
        </div>

        <!--PDF-->
        <h1>PDF</h1>

        <div class="row">
            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/pdf.png" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/pdf.png" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/pdf.png" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/pdf.png" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>
        </div>

        <!--Videos-->
        <h1>Videos</h1>

        <div class="row">
            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/videos.jpg" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/videos.jpg" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/videos.jpg" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/videos.jpg" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>
        </div>

        <!--PDF-->
        <h1>PDF</h1>

        <div class="row">
            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/pdf.png" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/pdf.png" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/pdf.png" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/pdf.png" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>
        </div>

        <!--Audio-->
        <h1>Audio</h1>

        <div class="row">
            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/audio.png" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/audio.png" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/audio.png" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <a href="#"> <img src="images/audio.png" class="card-img-top myDIV" alt="...">
                        <div class="centered"></div>

                    </a>
                </div>
            </div>
        </div>

        <!-- Temporary logout button: Paxi Replace Garamla -->
        <div id="logout_form_div">
            <form name="GK_logout_button" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input type="submit" value="Log Out" name="logout">
            </form>
        </div>


        <!-- bottom nav-->
        <div style="background-color: rgb(134, 128, 219); height: 500%;text-align: right; font-size:x-large; margin-bottom: 0%; size: 100%; ">
            <a href="terms.txt" style="color: black;">
                <h5 style="text-align-last: center  ;font-size: 100%;">Terms And Conditions</h5>
            </a>
            <p style="font-family: 'Franklin Gothic Medium'; font-size: 70%; text-align-last: center; color: black;">
                Jawlakhel,Lalitpur<br>01-5526296<br>Email:<a href="email.php" style="color: blue;">Gyan-Kunja@edu.com.np
                </a>
            </p>
            <div style="text-align-last:center;">
                <h6 style=" text-shadow: black;color: black; text-align-last: center;">Connect us Through:
                </h6>

                <a href="https://twitter.com/login" class="fa fa-twitter hover"></a>&nbsp;&nbsp;&nbsp;
                <a href="https://www.pinterest.com/" class="fa fa-pinterest hover"></a>&nbsp;&nbsp;&nbsp;
                <a href="https://www.linkedin.com/login" class="fa fa-linkedin hover"></a>&nbsp;&nbsp;&nbsp;
                <a href="https://www.instagram.com/accounts/login/" class="fa fa-instagram hover"></a>&nbsp;&nbsp;&nbsp;
                <a href="https://www.youtube.com/" class="fa fa-youtube hover"></a>&nbsp;&nbsp;&nbsp;
                <a href="https://www.skype.com/en/" class="fa fa-skype hover"></a>&nbsp;&nbsp;&nbsp;

            </div>
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script>
            //Get the button
            var mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>

        <script>
            /* Toggle between adding and removing the "responsive" class to the navbar when the user clicks on the icon */
            function myFunction() {
                var x = document.getElementById("myNavbar");
                if (x.className === "navbar") {
                    x.className += " responsive";
                } else {
                    x.className = "navbar";
                }
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>

    </html>

<?php } ?>