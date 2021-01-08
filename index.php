<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Viken Design</title>

    <!-- Favicon -->
    <link rel="icon" href="./faviconums.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
          font-family:helvetica;
        }

         {
          box-shadow: 2px 0px 3px 1px;
          box-sizing: border-box;}
          form.searchform input[type=text] {
          padding: 10px;
          font-size: 17px;
          border: 1px solid grey;
          float: left;
          width: 80%;
          background: #f1f1f1;
        }

        form.searchform button {
          float: left;
          width: 20%;
          padding: 10px;
          background:   #1cc3b2;
          color: white;
          font-size: 17px;
          border: 1px solid grey;
          border-left: none;
          cursor: pointer;
        }

        form.searchform button:hover {
          background: #000000;
        }

        form.searchform::after {
          content: "";
          clear: both;
          display: table;
        }
</style>

</head>

<body>


    <!-- Header Area Start -->
    <header class="header">
        <div class="header">    
            <a href="./tdesignAPI/images/vikenlogo.png" class="logo">Viken Design</a>
                <div class="header-right">
                <a href="./index.php">Home</a>
                <a href="./aboutus.php">About Us</a>
                <a href="./shop.php">Shop Now</a>
				<a href="./customize.php">Customize</a>
                <a href="./contact.php">Contact Us</a>
                </div>
        </div>
    </header>
    <!-- Header Area End -->
	
	
	   <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- make Welcome Slide -->
            <div class="make-welcome-slide bg-img bg-overlay" style="background-image: url(./viken.jpg);" data-img-url="./viken.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <br></br>
                                    <br></br>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms">Welcome To Viken Design</h2>
                                
                                    <h6 data-animation="fadeInLeft" data-delay="200ms"> Endless Posibilities With Viken Design</h6>
                                    <br></br>
                                    <a href="./customize.php" class="btn fci-btn btn-2" data-animation="fadeInLeft" data-delay="800ms">Customize Your Own Design</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


   

   
     <!-- Footer Area Start -->
    <footer>
        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            
                            <p>
                               
                                
                              Copyright by Viken Design &copy;<script>document.write(new Date().getFullYear());</script> | All rights reserved</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="https://www.facebook.com/VikenTshirtDesign"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/viken_design/"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
                            <a href="https://www.youtube.com/channel/UCVGOs5IBdasTm6TxbY-NWQg"><i class="fa fa-youtube fa-3x" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/fci.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>