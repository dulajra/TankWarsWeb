<!DOCTYPE html>
<html>
    <head>
        <title>Envision</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/scripts/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/script.js"></script>

        <script>
            $(document).ready(function () {
                hideAll();
                $("#main_1_content").show();
                
                $("#sidebar ul li ul li").click(function () {
                    var id = $(this).attr('id');
                    if (id == 'main_1') {
                        hideAll();
                        $("#main_1_content").show();
                    }
                    else if (id == 'main_2') {
                        hideAll();
                        $("#main_2_content").show();
                    }
                })
            });

            function hideAll() {
                $("#main_1_content").hide();
                $("#main_2_content").hide();
            }

        </script>
    </head>
    <body id="home" style="margin-top: 50px">

        <?php
        require_once './header.php';
        require_once './sidebar_tankwars.php';
        require_once './footer.php';
        ?>

        <div id="main_1_content" class="container" style="padding-bottom: 50px;">
            <div class="row">
                <div id="content" class="col-md-8">
                    <h1 align="center">Programming Challenge II</h1><br>

                    <h3 id="main_1_sub_1">What is programming challenge II?</h3>
                    <p class="text-justify">Programming challenge II is a NON-GPA one credit module offered for semester 4
                        Computer Science and Engineering students of University of Moratuwa.</p>
                    <p>Server side implementation of the Tank Wars game is provided by the department. Students have 
                        to develop the client side for the game. And also a web site should be designed in order to promote the game.</p>

                    <h3 id="main_1_sub_2">Course Details</h3>
                    <ul>
                        <li>Module Code: CS 2212</li>
                        <li>Module Title: Programming Challenge II</li>
                        <li>Credits: 1.0</li>
                        <li>Pre-requisites: CS2062, CS2022</li>
                        <li>GPA/NGPA: NGPA</li>
                    </ul>

                    <h3 id="main_1_sub_3">Subject Coordinators</h3>
                    <ul>
                        <li>Dr Surangika Ranathunga</li>
                        <li>Mr Sandamal Weerasinghe</li>
                    </ul>
                </div>
            </div>            
        </div>

        <div id="main_2_content" class="container" style="padding-bottom: 50px;">
            <div class="row">
                <div id="content" class="col-md-8">
                    <h1  align="center">Tank Wars</h1><br>

                    <h2 id="main_2_sub_1">About Tank Wars</h2>
                    <p class="text-justify">Tank Wars is a server-client shooting game which has a map of a 10 x 10 grid. 
                    Players are represented by tanks and a game can contain upto maximum of 5 players. The game objective 
                    is to accumulate points as mush as possible while ensuring tank's own survival. Tanks can shoot bullets
                    which move 3 times faster than the tanks. In addition to tanks, map contains following four kind of objects. </p>
                     
                    <ul>
                        <li>Brick Wall</li>
                        <li>Stone Wall</li>
                        <li>Water</li>
                        <li>Blank Cell</li>
                    </ul>
                    
                    <p>Among above four kinds of objects, bullets can pass only through blank cells. Bullets cannot pass 
                    through brick walls but can damage brick walls. One successful bullet hit will damage 25% of a brick. 
                    So that a brick wall becomes a blank cell after 4 successful bullet hits. </p>
                    
                    <h3>How to score points?</h3>
                    <dl>
                        <dt></dt>
                    </dl>

                    <h3 id="main_2_sub_2">Client Information</h3>
                    <p class="text-justify"></p>

                    <h3 id="main_2_sub_3">Server Information</h3>
                    <p class="text-justify"></p>

                </div>
            </div>            
        </div>

    </body>
</html>
