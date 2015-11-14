<!DOCTYPE html>
<html>
    <head>
        <title>Envision</title>
        <link href="css/agency.css" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <script src="bootstrap/scripts/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/styles.css">
        <link rel="shortcut icon" href="favicon.png">

        <script src="bootstrap/js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!--Custom fonts-->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <!-- Custom Fonts -->
        <script src="js/loader.js"></script>

        <script>
            $(document).ready(function () {
                $(".mywrapper").hide();
            });
        </script>

        <script>
            $(document).ready(function () {
                $("#message").keypress(function (event) {
                    if (event.which == '13') {
                        return false;
                    }
                });
            });
        </script>

    </head>
    <body id="home" style="margin-top: 50px; padding-bottom: 60px;" >

        <?php
        require_once './header.php';
        require_once './footer.php';
        ?>

        <div class="preloader">
            <div class="animation"></div>
        </div>

        <div class="mywrapper">
            <div id="contact" class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 >STAY IN TOUCH</h2><br>
                        <h4 class="text-muted">Feel free to contact us at any time or drop a friendly feedback.</h3><br>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form name="sentMessage" id="contactForm" novalidate>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                                    <p class="help-block text-danger"></p>

                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                                    <p class="help-block text-danger"></p>

                                                </div>
                                                <div class="form-group">
                                                    <input type="tel" class="form-control" placeholder="Your Phone" id="phone">
                                                    <p class="help-block text-danger"></p>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                                    <p class="help-block text-danger"></p>

                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-lg-12 text-center">
                                                <div id="success"></div>
                                                <button type="submit" class="btn btn-xl">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
                </body>
                </html>
