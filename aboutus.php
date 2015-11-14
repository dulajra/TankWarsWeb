<!DOCTYPE html>
<html>
    <head>
        <title>Envision</title>
        <link href="css/agency.css" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <script src="bootstrap/scripts/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>



        <link rel="stylesheet" href="css/styles.css">

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

        <link rel="shortcut icon" href="favicon.png">

        <style>

            quote:before {
                color: #ccc;
                content: open-quote;
                font-size: 4em;
                line-height: 0.1em;
                margin-right: 0.25em;
                vertical-align: -0.4em;
            }
            quote:after {
                color: #ccc;
                content: close-quote;
                font-size: 4em;
                line-height: 0.1em;
                margin-left: 0.25em;
                vertical-align: -0.4em;
            }
            quote p {
                display: inline;
            }
        </style>
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
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2>Envision&#8482</h2>
                        <h3></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="team-member">
                            <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                            <h4>Dulaj Atapattu</h4>
                            <p class="text-muted"><a style="color:#888888;" href="mailto:dulaj.atapattu.13@cse.mrt.ac.lk?subject=Envision">dulaj.atapattu.13@cse.mrt.ac.lk</a></p>
                            <ul class="list-inline social-buttons">
                                <li><a target="_blank" href="https://twitter.com/DRAtapattu"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a target="_blank" href="https://www.facebook.com/dulaj.atapattu"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a target="_blank" href="https://lk.linkedin.com/pub/dulaj-atapattu/a7/317/103"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="team-member">
                            <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                            <h4>Madhawa Vidanapathirana</h4>
                            <p class="text-muted"><a  style="color:#888888;" href="mailto:madhawa.13@cse.mrt.ac.lk?subject=Envision">madhawa.13@cse.mrt.ac.lk</a></p>
                            <ul class="list-inline social-buttons">
                                <li><a target="_blank" href="https://twitter.com/madhawav"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a target="_blank" href="https://www.facebook.com/MadhawaVidanapathirana"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a target="_blank" href="https://lk.linkedin.com/pub/madhawa-vidanapathirana/41/b9/343"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <quote>
                            <p class="large text-muted"><big>Where DREAMS become REALITY</big></p>
                        </quote>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
