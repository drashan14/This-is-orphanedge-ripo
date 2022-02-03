<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'phpbackend/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $phone=$_POST["phone"];
    $message=$_post["message"];
    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT * FROM `user` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Username Already Exists";
    }
    else{
        // $exists = false; 
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `user` ( `username`, `password`, 'phone','message',`dt`) VALUES ('$username', '$hash', '$phone','message',current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}
    
?>


<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>An Assist for orphans</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- this lik for the dynamic changes in sentances-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.9/typed.min.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-77097747-2');
    </script>
    <style type="text/css">
        .contactform
        {
            margin-left:30px;
        }
    </style>
</head>

<body>
    
    <!-- Navigation-->

    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div id="logo">
            <ul style="font-size:30px">
                <img src="sam.jpg" alt="">
                <a class="navbar-brand" href="index.html">
                    <font style="color:#b1f4c6">samarthya</font>
                </a>

            </ul>
        </div>
        <div class="container px-4 px-lg-5">

            <a class="navbar-brand" href="index.html">
                <font size="5px">Home</font>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">

                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="donor.html">
                            <font size="5px">Donors</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="impact.html">
                            <font size="5px">Impact</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="blog.html">
                            <font size="5px">Blog</font>
                        </a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact1.html">
                            <font size="5px">Contact</font>
                        </a></li>

                </ul>
            </div>
        </div>
    </nav>
   
    
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('img1.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">



                        <!-- dynamic changes dont touch it -->
                        <section id="intro"
                            style="background: url(img/bg.jpg) center center no-repeat; background-size: cover;"
                            class="intro-section pb-2">
                            <div width="100%" style="font-size:5px">
                                <h5 data-animate="fadeInUp" class="text-shadow" style="color:white">
                                    <font color="black" size="5px"></font><span id="typed"></span>
                                </h5>

                            </div>
                        </section>
                        <script>
                            var typed = new Typed('#typed', {
                                strings: ["An Assist for orphans", "I am Darshan rathod ",
                                    "I am a Passionate Coder!",
                                    "Comparison without action is just te observation!",
                                    "I am an enthusiastic Techie!",
                                    "This is your time doante wich you wantI",
                                    "Spports us !",
                                    "Thanks for visiting my page!"
                                ],
                                backSpeed: 15,
                                smartBackspace: true,
                                backDelay: 1200,
                                startDelay: 1000,
                                typeSpeed: 25,
                                loop: true,

                            });</script>
                        <h2>
                            <font color="yellow" style="text-shadow:3px 5px blue">An Assist for orphans</font>
                        </h2>
                        <div style="border:3px">
                            <button type="button" style="border-radius:10px" class="btn btn-danger" style="radius:30px">
                                <font style="font-size:20px">Donate Now</font>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <h1 align="center">CONTACT PAGE</h1>
                <div class="container">

                    <p>Samarthya Kalyankari Sanstha

                        <br/>At Sardarnagar Post Kader Tal Omerga
                        
                        Dist. <br/>Osmanabad, Maharashtra, 413606 India
                                maha.samarthya@gmail.com    
                        
                         +91 9763519154    7972535352
                        
                        www.mahasamarthya.org
                        
                        </p>
                    <div class="my-5">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="post" action="contact.php">
                            <div class="form-floating" style="margin-left:30px">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                    data-sb-validations="required" />
                                <label for="name">Name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="email" type="email" placeholder="Enter your email..."
                                    data-sb-validations="required,email" />
                                <label for="email">Email </label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.
                                </div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="phone" type="tel"
                                    placeholder="Enter your phone number..." data-sb-validations="required" />
                                <label for="phone">Phone Number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                    required.
                                </div>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" id="message" placeholder="Enter your message here..."
                                    style="height: 12rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                                </div>
                            </div>
                            <br />
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a
                                        href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <!-- Submit Button-->
                            <button  style="margin-left:300px"  class="btn btn-primary text-uppercase disabled" id="submitButton"
                                type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div>
        <h1>Our Location on  Map ....</h1>
    </div>
<!-- The map section-->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30383.806715413582!2d76.6222433!3d17.8397675!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa9fc61a6a3be5123!2sSamarthya!5e0!3m2!1sen!2sin!4v1643635864514!5m2!1sen!2sin" width="1500" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<!-- Footer-->
<section style="margin-top:200px">
    <footer class="border-top" width="100%" style="background-color:black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="icon-Linkedin fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github  fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2021</div>
                </div>
            </div>
        </div>
    </footer>
</section>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<div id="typed-strings">
</div>


<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>

</html>