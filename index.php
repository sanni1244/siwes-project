<?php
    include("links/confirmation.php");
    $savedid1 = NULL;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infonomics Nigeria</title>
    <link rel="stylesheet" href="links/bootstrap.min.css">
    <link rel="stylesheet" href="links/style.css">
    <link rel="shortcut icon" href="img/favi.png" type="image/x-icon">

</head>
<body>
    <div>
        <!--Nav Bar-->
        <div class="nav-col myproject">
            <nav class="navbar navbar-light transparent">
            <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img src="./img/logo.png" alt="logo" class="d-inline-block align-text-top logo">
                    
                    <span class="ll">
                    </span>
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#login">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="links/apply.php">Apply to join us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
                </div>
        
            </nav>
            <br>

        </div>
        <!--End of nav-->

        <!--Content-->
        <div class="container">
        <div class="background-im" >
            <p>
                <b>I</b>nfonomics services Limited is an IT solutions provider with focus on software and data centric applications for actionable insights that 
                consistently position our clients ahead of the competition.
            </p>
            <p >
                <h4>What We Do</h4>
                <ul  class="whatwedo">
                    <li>Infonomics takes ownership of your challenges by transforming your data into a tangible asset that greatly assist in streamlining your operations.
                    </li>
                    <li>
                       We provide a unique approach to Business Intelligent Solutions by optimizing its delivery using our integrated skills base supported by specialists and partners abroad.
                    </li>
                    <li>
                        We deal with Software Package Implementation and Operation Support.
                    </li>
                    <li>
                        We provide Consulting Services by teaming up with our customers to develop and improve IT related processes and systems within the organisation.
                    </li>
                    <li>
                        We provide end-to-end custom software services with a focus on big data, real-time communication, e-commerce, eLearning, Analytics, Enterprise Resource Planning Application, CRM, Business Performance Management, Custom application development and IT project resourcing.
                    </li>
                </ul>
                
                
               
            </p>

        </div>
        </div>
        <br><br><br>
        <div class="middle" id="login">
            <h3>Daily Progress Table</h3>
                <fieldset class="leg">
                    <legend class="b">Log In</legend> <br> <br>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" autocomplete="on" accept-charset="">
                        <div class="mb-3">
                            <label for="fname" class="form-label b">First Name</label>
                            <input type="text"  id="id1" placeholder="Your Name" class="form-control" name="firstname">
                            <span  class="red"><?php  echo $fnameErr ?></span>
                        <br>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label b">ID Number</label>
                          <input type="number" id="id4" placeholder="Enter your 9 digit Identification number" class="form-control" name="idnum">
                          <span class="red"><?php  echo $idnumErr ?></span>
                        </div>
                        
                        </div>
                        <button type="submit" name="submitit" class="btn btn-primary">Submit</button>
                      </form>
                </fieldset>


                <div class="gotoapply" >
                    <a href="./links/apply.php">Apply To Join Us</a>

                </div>
        </div>
        <div class="middle contacted" id="contact">
            <h1>Contact Us</h1>
                    <p>
                        <img src="img/call.png" width="40px" height="40px" alt="" > <br>
                        <span><a  class="linkedit"href="Tel:+234 900 0000 000">Call: +234 900 0000 000</a></span> <br>
                        <span><b>Monday - Friday (9am - 5pm)</b></span>
                    </p>
                    <p>
                        <img src="img/mail.png" width="40px" height="50px" alt="" > <br>
                    <span><a class="linkedit" href="mailto:Email: johndoe@gmail.com">Email: johndoe@gmail.com</a></span> <br>
                    </p>
                </p>
                <p>
                    <img src="img/location.png" width="40px" height="40px" alt="" > <br>
                <span><a class="linkedit">Location: 4, Vitoria Island, Lagos, Nigeria</a></span> <br>
                </p>
        </div>

        <!--Footer-->
            <div class="foot">
                <img class="logo" src="img/logo.png"  alt="">
                <div class="notes">
                    <h2>Our Vision</h2>
                    To be the preferred information management and solution provider in Africa through strong partnership, innovation and domain expertise.
                    <br> <br>
                    <p>&copy; Copyrights and all rights reserved</p>
                </div>
                
            </div>
            
     </div>
    <script src="./links/bootstrap.min.js"></script>
    <script src="./links/index.js"></script>
    <script>
        // Make values remain after sign in failure

        document.getElementById("id1").setAttribute("value", "<?php Print($fname); ?>");
        document.getElementById("id2").setAttribute("value", "<?php Print($idnum); ?>");

    </script>
</body>
</html>
