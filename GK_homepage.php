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

    <title>Gyankunja-Homepage</title>
</head>

<style>
    .nav-color {
        background-color: rgb(110, 110, 255);
        margin-top: 0%;
        padding: 1.5%;
        border: none;
        /* height: 4rem; */

    }

    @media screen and (min-width:990px) {
        .nav-color {
            height: 5rem;
        }

    }

    .navnav {
        height: 9rem;
        background-color: rgb(110, 110, 255);

    }
</style>

<body class="background">
    <!-- <p class="animate">Gyan-kunja</p> -->

    <!-- Back to top button -->
    <button onclick="topFunction()" id="myBtn" class="fa fa-angle-double-up"></button>


    <!--Top navigation bar-->

    <nav class=" navbar  sticky-lg-top  navbar-expand-lg navbar-light bg-light" style="padding: 0%;">
        <div class="container-fluid nav-color">
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
                        <a class="nav-link  hover" href="#" id="text">Discussion
                            Hub</a>
                    </li>
                    <li>
                        <a class="nav-link  hover" href="#" id="text">My Resources</a>
                    </li>
                    <li>
                        <a class="nav-link  hover" href="loginForm.html" id="text">Login</a>
                    </li>
                    <li>
                        <a class="nav-link  hover" href="signup.html" id="text">Sign Up</a>
                    </li>

                </ul>


                <form class="d-flex">
                    <input class="form-control me-2 " id="border" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn myBtn " id="border" type="submit">Search</button>
                </form>

            </div>
        </div>
    </nav>



    <!--Universities-->
    <h1>Universities</h1>

    <div class="row ">

        <div class="column">
            <div class="card myDIVothers">

                <a href="#" class="acard"> <img src="images/universities/TU.png" class="card-img-top myDIVtri">
                    <!-- myDIVtri yaha hunuparne ho -->
                    <br> <br>Tribhuwan University
                </a>
            </div>
        </div>

        <div class="column">
            <div class="card myDIVothers">

                <a href="#" class="acard"> <img src="images/universities/PU.png" class="card-img-top myDIV ">


                    <br><br> Purvanchal University


                </a>
            </div>
        </div>

        <div class="column">
            <div class="card myDIVothers">
                <a href="#" class="acard"> <img src="images/universities/Pokhara.png" class="card-img-top myDIV ">
                    <br><br> Pokhara University


                </a>
            </div>
        </div>

        <div class="column">
            <div class="card myDIVothers">
                <a href="#" class="acard"> <img src="images/universities/KU.png" class="card-img-top myDIV ">
                    <br><br> Kathmandu University


                </a>
            </div>
        </div>
    </div>

    <!--Streams-->

    <h1>Streams</h1>

    <div class="row">
        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">

                    <div class="centered ">CSIT</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered  ">BIM</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered ">BCA</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card" class="myDIVothers">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">BBS</div>

                </a>
            </div>
        </div>
    </div>

    <!--Free Writings-->

    <h1>Free Writings</h1>

    <div class="row">
        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">Poems</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">Song Lyrics</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">Stories</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">Novels</div>

                </a>
            </div>
        </div>
    </div>

    <!--Popular Creators-->

    <h1>Popular Creators</h1>

    <div class="row">
        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">CSIT</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">CSIT</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">CSIT</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">CSIT</div>

                </a>
            </div>
        </div>
    </div>

    <!--Videos-->

    <h1>Videos</h1>

    <div class="row">
        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">CSIT</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">CSIT</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">CSIT</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">CSIT</div>

                </a>
            </div>
        </div>
    </div>
    <!--Slides-->

    <h1>Slides</h1>

    <div class="row">
        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">CSIT</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">CSIT</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">CSIT</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">CSIT</div>

                </a>
            </div>
        </div>
    </div>

    <!--Most viewed-->

    <h1>Most viewed</h1>

    <div class="row">
        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">CSIT</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">CSIT</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">CSIT</div>

                </a>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <a href="#" class="myDIVothers">
                    <!-- <img src="#" class="card-img-top myDIV" > -->
                    <div class="centered">CSIT</div>

                </a>
            </div>
        </div>
    </div>












    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


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








    <!-- bottom nav-->

    <div style="background-color: rgb(134, 128, 219); height: 500%;text-align: right; font-size:x-large; margin-bottom: 0%;  ">
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







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>