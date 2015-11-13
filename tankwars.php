<!DOCTYPE html>
<html>
    <head>
        <title>Envision</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/scripts/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/script.js"></script>
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
                })
            });

            function hideAll() {
                $("#main_1_content").hide();
                $("#main_2_content").hide();
            }

        </script>
    </head>
    <body id="home" style="margin-top: 50px; padding-bottom: 60px;" >

        <?php
        require_once './header.php';
        require_once './sidebar_tankwars.php';
        require_once './footer.php';
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
                    <p>
                    During the phase of gameplay, coin packs and health packs would appear and disappear in the Game World. Furthermore, the death of a Game Client also causes a Coin Pack to appear at the place of its death. A player may score points by collecting coins and destroying tanks. Furthermore, a player may recover health by collecting health packs.</p>

                    
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
                    The Tank Wars Competition is annually organized by Department of Computer Science and Engineering, University of Moratuwa. This is a competition in which AI controlled Tank Wars clients compete each other in a range of 5 player warzones. The Game Clients which score most points in a particular round would be selected to the next round. The competition would terminate at the finals where the best AI featured clients would compete.
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

    </body>
</html>
