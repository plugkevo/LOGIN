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

     <!-- sidebar file -->
     <?php
        require_once('body/sidebar.php')
   ?>

   
    <main class="p-5 mb-4 bg-light" >   
        <div class="container">
            <div class="main">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="images/spongebob.jpg" alt="" height="250px" width="250px">
                    </div>
                    <div class="col-lg-6">
                        <h5>For any questions or enquiries contact us in the following ways</h5>
                        <div class="card-body">
                            <a href="https://www.instagram.com/heaven.creationske/"target="blank" >
                                <i class="fa fa-instagram fa-3x"></i> Instagram
                            </a>
                            <br> 
                            <a href="#">
                                <i class="fa fa-whatsapp fa-3x"></i> Whatsapp
                            </a> 
                            <br>
                            <a href="https://www.facebook.com/pann.gathoni" target="blank">
                                <i class="fa fa-facebook fa-3x"></i> facebook
                            </a>
                            <br>
                            <a href="#">
                                <i class="fa fa-twitter fa-3x"></i> Twitter
                            </a>  
                            <br>
                            


                        </div>
                    </div>
                </div>
            </div>
            <div class="nain-content">
                <img src="" alt="">
            </div>
        </div>    
    </main>        



    <!-- scripts file -->
    <?php
        require_once('connections/scripts.php')
    ?>

      
</body>
</html>