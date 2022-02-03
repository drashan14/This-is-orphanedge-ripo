<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT * FROM `user` WHERE username = '$username' ";
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
            $sql = "INSERT INTO `user` (  `username`, `password`, `phone`, `message`, `dt`) VALUES ('$username', '$hash', '$phone','$message',current_timestamp())";
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
   <?php require "_nav.php" ?>
 
    <?php
    if($showAlert){
    echo ' <script> console.log(alert("You are logine succesfully");</script>
     ';
    
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>
    
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
                <h1 align="center" style="color:red">CONTACT PAGE</h1>
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
                    
       
                   <form action="contact1.php" method="post">
        <div class="form-group col-md-6 my-3" style="border:3px">
            <label for="username">username</label>
            <input type="email" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp" >
            
        </div>
        <div class="form-group col-md-6  my-3">
            <label for="password">password</label>
            <input type="password" maxlength="23" class="form-control" id="password" name="password" >
        </div>
        <div class="form-group col-md-6  my-3"  >
            <label for="cpassword">confirm password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
            <small id="cpassword" class="form-text text-muted"></small>
        </div>
        <div class="form-group col-md-6  my-3">
            <label for="phone">phone</label>
            <input type="text" class="form-control" id="phone" name="phone">
            <small id="phone" class="form-text text-muted" ></small>
        </div>
        <div class="form-group col-md-6  my-3" style="margin-top:5px">
            <label for="message">message</label>
            <input type="message" class="form-control" id="message" name="message" >
            <small id="message" class="form-text text-muted"></small>
        </div>
                    
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            
                        
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                           
                            <!-- Submit Button-->
                            <button type="submit" align="center" style="margin-top:10px" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
   
<!-- The map section-->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30383.806715413582!2d76.6222433!3d17.8397675!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa9fc61a6a3be5123!2sSamarthya!5e0!3m2!1sen!2sin!4v1643635864514!5m2!1sen!2sin" width="1500" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<!-- Footer-->
<section style="margin-top:50px" width="1200px" style="height:250px">
<div class="container" style="margin-left:50px"><h2  style="color:blue" align="center"  >Samarthya</h2>
    <n/><h6  align="center" style="color:dark" style="margi-top:10px">Samarthya is a development organisation committed to building just communities.</h6><n/><h6 align="center"  style="color:light-dark"><font color="light-black" > Email :-</font>maha.samarthya@gmail.com</h6>
</n><h6  align="center" style="color:dark"><font color="blue" > Phone :-</font>+91 97653 63734, 70576 70030/h6>
</div>
  <footer class="border-top" width="100%" style="background-color:black">
    
  
  <div class="container"><font color="grey"  style="font-family:cursive"><h6 id="s1" style="font-family:italic" align="center">Samarthya  is a development organization registered under the Societies Registration Act,1860 and u/s -12A and u/s - 80G of the Income tax Act, 1961<br/><h6 style="margin-top:3px" style="text-size:2px" align="center">Privacy Policy | Term of Use</h6> </h6></font></div>
  
  <div class="my-5"class="container px-4 px-lg-5 " >
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