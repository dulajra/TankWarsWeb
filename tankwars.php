<!DOCTYPE html>
<html>
    <head>
        <title>Envision</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/scripts/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/script.js"></script>

        <!--Custom fonts-->
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <script src="js/loader.js"></script>

        <script>
            $(document).ready(function () {
                $(".mywrapper").hide();
            });
        </script>

        <link rel="shortcut icon" href="favicon.png">
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
                    else if (id == 'main_3') {
                        hideAll();
                        $("#main_3_content").show();
                    }
                })
            });

            function hideAll() {
                $("#main_1_content").hide();
                $("#main_2_content").hide();
                $("#main_3_content").hide();
            }

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

            <?php
            require_once './sidebar_tankwars.php';
            ?>

            <div id="main_1_content" class="container" >
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

            <div id="main_2_content" class="container">
                <div class="row">
                    <div id="content" class="col-md-8">
                        <h1  align="center">Tank Wars</h1><br>

                        <h2 id="main_2_sub_1">About Tank Wars</h2>
                        <p class="text-justify"><b>Tank Wars</b> is a <b>server-client shooting game</b> which has a map of a <b>10 x 10 grid</b>. 
                            Players are represented by <b>tanks</b> and a game can contain upto maximum of <b>5 players</b>. The game objective 
                            is to <b>accumulate points as mush as possible while ensuring tank's own survival</b>. Tanks can <b>shoot bullets</b>
                            which move 3 times faster than the tanks. In addition to tanks, map contains following four kind of objects. </p>

                        <ul>
                            <li>Brick Wall</li>
                            <li>Stone Wall</li>
                            <li>Water</li>
                            <li>Blank Cell</li>
                        </ul>

                        <p>Among above four kinds of objects, <b>bullets</b> can pass only through <b>blank cells</b>. <b>Bullets</b> cannot pass 
                            through <b>brick walls</b> but can damage <b>brick walls</b>. One successful bullet hit will <b>damage 25% of a brick</b>. 
                            So that a brick wall becomes a blank cell after 4 successful bullet hits. </p>
                        <p>
                            During the phase of game play, <b>coin packs</b> and <b>health packs</b> would appear and disappear in the <b>Game World</b>. Furthermore, the <b>death of a Player</b> causes a <b>Coin Pack</b> to appear at the place of its death. <br><br>
                            A player may score points by
                        <ul>
                            <li><b>Breaking Bricks</b> - Each time a brick is damaged by a bullet, a constant amount of points are added to Player</li>
                            <li><b>Collecting Coins</b> - When a player moves over a coin pile, the coins and the points of the player are increased by an amount equal to the value of the coin pile</li>
                            <li><b>Spoil of War</b> - When a player dies, 25% of points of the victim are added to the killer</li>
                        </ul>

                        <p>When a player is <b>shot</b>, it's <b>health</b> diminishes. A <b>player</b> may die when it's <b>health</b> becomes zero. Furthermore, a player could die by traveling over <b>water</b>. A player may <b>recover health</b> by collecting <b>health packs.</b> </p>
                        <br>

                        <div class="panel-group">
                            <div class="panel panel-default">
                                <a data-toggle="collapse" href="#collapseTWC">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">The Tank Wars Competition</h3>
                                    </div>
                                </a>
                                <div id="collapseTWC" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p align="justify">
                                            The <b>Tank Wars Competition</b> is annually organized by <b>Department of Computer Science and Engineering, University of Moratuwa</b>. This is a competition in which <b>AI</b> controlled <b>Tank Wars clients</b> compete each other in a range of <b>5 player warzones</b>. The <b>Players</b> who would score most <b>points</b> in a particular <b>round</b> would be selected to the next round. The competition would <b>terminate</b> at the finals where the best <b>AI</b> featured clients would compete.
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="panel panel-default">
                                <a data-toggle="collapse" href="#collapseC">
                                    <div class="panel-heading">
                                        <h3 id="main_2_sub_2" class="panel-title">Client Information</h3>
                                    </div>
                                </a>
                                <div id="collapseC" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p class="text-justify"><b>Envi</b> is a Tank Wars Client developed by Team Envision. Envi is powered by <b>Unity Game Engine</b>. </p>

                                        <b><u>AI System</u></b>
                                        <p align="justify">The <b>AI system</b> of <b>Envi</b> utilizes techniques such as <u>opponent behaviour prediction</u> and <u>strategic importance of cell</u> to determine its moves. Furthermore, the client consists of a self-defence system which prevents itself from undertaking a fatal move. This defence system also ensures that <b>Envi</b> avoids bullets fired by opponents.</p>

                                        <b><u>User Interface</u></b>
                                        <p align="justify">The GUI System is based on <b>Unity Game Engine</b>. It is a <u>3D</u> user interfaces with <u>smooth transitions between frames</u>.</p>

                                        <b><u>System Requirements</u></b>
                                        <ul>
                                            <li>Intel/AMD x86 based processor with SSE2 Instruction Set Support</li>
                                            <li>512 MB Ram</li>
                                            <li>Direct X 9.0 Compatible Graphics Card with Shader Model 2.0</li>
                                            <li>Microsoft Windows XP or later operating System</li>
                                            <li>LAN Capability to connect with the Server</li>
                                            <li>Basic Sounds (Optional)</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="panel panel-default">
                                <a data-toggle="collapse" href="#collapseS">
                                    <div class="panel-heading">
                                        <h3 id="main_2_sub_3" class="panel-title">Server Information</h3>
                                    </div>
                                </a>
                                <div id="collapseS" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p align="justify">
                                            The <b>TankWars Server</b> is provided by <b>Department of Computer Science and Engineering - University of Moratuwa</b> as a platform to hold the TankWars Competition. The client and the server utilizes a Client Server Socket Interface over LAN to communicate. The server can support upto 5 clients simultaneuosly. The Server would <u>maintain the state of the GameWorld</u>. Furthermore, it is responsible for <u>spawning collectables</u> to the Game World.

                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>





                    </div>
                </div>            
            </div>

            <div id="main_3_content" class="container" >
                <div class="row">
                    <div id="content" class="col-md-8">
                        <h1 align="center">Download</h1><br>

                        <h3 id="main_3_sub_1">Trailer</h3>
                        <iframe
                            src="http://www.youtube.com/embed/XGSy3_Czz8k?value=1&autoplay=0">
                        </iframe>


                    </div>
                </div>            
            </div>
        </div>
    </body>
</html>
