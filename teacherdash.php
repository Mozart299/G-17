<?php

?>
<html>
    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teacher</title>
        <link rel="stylesheet" href="teacherdash.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar">
            <!--profile image & text-->
                <div class="profile">
                    <img src="IMG-20201103-WA0013.jpg" alt="profile_picture">
                    <h3>Kyeyune Peter</h3>
                    <p>Teacher</p>
                </div>
            
        
            <!--menu item-->
            <ul>
                <li>
                    <a href="#home" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">My Home</span>
                    </a>
                </li>
                <li>
                    <a href="#dash">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">Register</span>
                    </a>
                </li>
        
            
                <li>
                    <a href="#results">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Assignments</span>
                    </a>
                </li>
                <li>
                    <a href="#complaint">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Activation Requests</span>
                    </a>
                </li>
           
                <li>
                    <a href="logout.php">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Log Out</span>
                    </a>
                </li>
            </ul>

            </div>
            <div class="section">
                <div class="top_navbar">
                    <div class="ham">
                        <a href="#">KINDERCARE</a>
                    </div>
                </div>
            </div>

        </div>
     
        <section id="home" class="section1">Home</section>
        <section id="dash" class="section2">Register</section>
        <section id="results" class="section3">Assignments</section>
        <section id="complaint" class="section4">Activation Requests</section>

        <script>
            var ham = document.querySelector(".ham");
                 ham.addEventListener("click", function(){
                      document.querySelector("body").classList.toggle("active");})
        </script>
    </body>
</html>
