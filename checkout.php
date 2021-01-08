<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Viken Design</title>

    <!-- Favicon -->
    <link rel="icon" href="./tdesignAPI/images/faviconums.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="checkout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css
    <link href="css/normalize.css" rel="stylesheet">
	
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
		<script src="js/jquery-1.10.2.js">	</script>
		<script src="js/bootstrap.js">		</script>
    <style>
        body {
          font-family: Arial;
        }
</style>

</head>

<body>


    <!-- Header Area Start -->
    <header class="header">
        <div class="header">    
            <a href="./tdesignAPI/images/vikenlogo.png" class="logo">Viken Design</a>
                <div class="header-right">
                <a class="active" href="./index.php">Home</a>
                <a href="./aboutus.php">About Us</a>
                <a href="./shop.php">Shop Now</a>
				<a href="./customize.php">Customize</a>
                <a href="./contact.php">Contact</a>
                </div>
        </div>
    </header>
    <!-- Header Area End -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"
    type="text/javascript"></script>
<script type="text/javascript">
        function validate() {
            var valid = true;

            $(".info").html("");
            var userName = document.forms["mailForm"]["userName"].value;
            var userEmail = document.forms["mailForm"]["userEmail"].value;
            var subject = document.forms["mailForm"]["subject"].value;
            var userMessage = document.forms["mailForm"]["userMessage"].value;
            
            if (userName == "") {
                $("#userName-info").html("(required)");
                $("#userName").css('background-color', '#FFFFDF');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("(required)");
                $("#userEmail").css('background-color', '#FFFFDF');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("(invalid)");
                $("#userEmail").css('background-color', '#FFFFDF');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("(required)");
                $("#subject").css('background-color', '#FFFFDF');
                valid = false;
            }
            if (userMessage == "") {
                $("#userMessage-info").html("(required)");
                $("#userMessage").css('background-color', '#FFFFDF');
                valid = false;
            }
            return valid;
        }
        
        function addMoreAttachment() {
            $(".attachment-row:last").clone().insertAfter(".attachment-row:last");
            $(".attachment-row:last").find("input").val("");
        }
</script>
<h1>Send Your Customized order by upload the images using file attachment</h1>
<h2>If your order is in the list just type the product name here. Sorry for the inconvenience. Thank You.</h2>
    <div class="attachment-form-container">
        <form name="mailForm" id="mailForm" method="post" action=""
            enctype="multipart/form-data" onsubmit="return validate()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Product Name</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="userMessage" id="userMessage"
                    class="input-field" id="userMessage" cols="60"
                    rows="6"></textarea>
            </div>
            <div class="attachment-row">
                <input type="file" class="input-field"
                    name="attachment[]">

            </div>

            <div onClick="addMoreAttachment();"
                class="icon-add-more-attachemnt"
                title="Add More Attachments">
                <img src="icon-add-more-attachment.png"
                    alt="Add More Attachments">
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> | All rights reserved</a>
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