<!DOCTYPE html>
<html lang="en">
<head>
     <!-- links file -->
   <?php
        require_once('connections/links.php')
   ?>
</head>
<body>
    <!-- header file -->
    <?php
        require_once('body/header.php')
   ?>

        
    </div>
    
     <!-- sidebar file -->
     <?php
        require_once('body/sidebar.php')
   ?>

   
        <main class="p-5 mb-4 bg-light" >   
            <div class="container">
                <div class="main">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="images/IMG-20220708-WA0097.jpg" alt="" height="250px" width="250px">
                        </div>
                        <div class="col-lg-6">
                            <h5>subscribe to our youtube channel for recepies</h5>
                            <div class="card-body">
                                <a href="https://www.youtube.com/channel/UCmQTpjqReCYv9AE0odlPZ4A"target="blank" >
                                    <i class="fa fa-youtube fa-3x"></i> Instagram
                            
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </main>

        <div class="row" style="margin-left: 15%;">
            <div class="col-lg-6">
               <h4>subscribe to get news on offers and other news</h4>
               <label for="email">Email</label> 
               <input type="text" class="form-control" id="inputemail" placeholder="--enter your email--">    
            </div>
            <div class="col-lg-6">
                <span class="float-end">
                    <img src="images/wedding.jpg" alt="" height="300px" width="300px">
                </span>
            </div>
        </div>
                


    <!-- scripts file -->
    <?php
        require_once('connections/scripts.php')
    ?>


        
    </body>
    </html>