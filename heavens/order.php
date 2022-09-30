<?php
    $server = "localhost";
    $username = "root"; 
    $password = "";
    $database = "kevann";

    $conn = mysqli_connect($server, $username, $password, $database);
    
    if( isset($_POST['submitbutton'] ) )
    {
    // fetch data
    $fullname = $_POST['fullname'];
    $phonenumber = $_POST['phonenumber'];
    $item  = $_POST['item'];
    $flavor  = $_POST['flavor'];
    $weight  = $_POST['weight'];
    $event  = $_POST['event'];
    $collectionmethod= $_POST['collectionmethod'];
    $message  = $_POST['message'];

    // submit form data
    $InsertData =mysqli_query($conn, "INSERT INTO heavens (fullname, phonenumber, item, flavor, weight, event, collectionmethod, message )
     VALUES('$fullname', '$phonenumber', '$item', '$flavor', '$weight', '$event', '$collectionmethod', '$message')");

if($InsertData)
{
    $response = "data submitted successfully" ;
}
else{
    $response = "error occured";
}
    }
?>
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


    <div class="nav">
        <p class="text"><h2>Place your order here</h2></p>
    </div>
    <main class="main-content">

        <div class="container shadow bg-dark">
            <form action="order.php" method= "POST" >

           

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <div class="form-group text-white" >
                                <label for="exampleInputEmail1"><b>Fullname</b></label>
                                <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="--Enter your Fullname--">
                                
                              </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <div class="form-group text-white" >
                                <label for="exampleInputEmail1"><b>Phone Number</b></label>
                                <input type="text" name="phonenumber"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="--Enter your phone number-- ">
                              </div>
                        </div>
                    </div> 
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="type " class="form-label text-white"> <b>Item</b></label>
                            <select class="form-select" aria-label="Default select example" name="item" >
                                <option selected>--Open this select menu--</option>
                                <option value="cakes">cakes</option>
                                <option value="Donughts">Donughts</option>
                                <option value="Bread">Bread</option>
                              </select> 
                        </div>   
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="type " class="form-label text-white"> <b>Flavor</b></label >
                            <select class="form-select" aria-label="Default select example" name="flavor">
                                <option selected>-- select cake flavor--</option>
                                <option value="vanilla">vanilla</option>
                                <option value="chocolate">chocolate</option>
                                <option value="coffee">coffee</option>
                              </select> 
                        </div>    
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="type " class="form-label text-white" > <b>Weight </b></label >
                            <select class="form-select" aria-label="Default select example" name="weight">
                                <option selected>--select preferred weight--</option>
                                <option value="1kg">1kg</option>
                                <option value="2kg">2kg</option>
                                <option value="3kg">3kg</option>
                                <option value="4kg">4kg</option>
                              </select> 
                        </div>    
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="type " class="form-label text-white" > <b>event</b></label>
                            <select class="form-select" aria-label="Default select example" name="event">
                                <option selected>--select event--(optional)</option>
                                <option value="Graduation">Graduation</option>
                                <option value="Birthday">Birthday</option>
                                <option value="Thanksgiving">Thanksgiving</option>
                                <option value="Wedding">Wedding</option>
                                <option value="Other">other</option>
                              </select>
                        </div>    
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="type " class="form-label text-white" > <b>Collection method</b></label>
                            <select class="form-select" aria-label="Default select example" name="collectionmethod">
                                <option selected>--select your best option for collection--</option>
                                <option value="Pick Up">Pick Up</option>
                                <option value="Delivery">Delivery</option>
                                
                              </select>
                        </div>    
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <div class="form-group text-white" >
                                <label for="exampleInputEmail1" ><b>Pick up/delivery date</b></label>
                                <input type="text" class="form-control" name="collectiondate" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pick up/delivery date">         
                              </div>
                        </div>
                    </div>
                    <?php
                    if($response)
                    {
                        
                        echo '<span class="alert alert-success">    
                            '.$response.'
                        </span>';
                    }
                    
                    ?>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <div class="form-group text-white" >
                                <label for="exampleInputEmail1" ><b>Message</b></label>
                                <input type="text" style="height: 3cm;" class="form-control" name="message" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter message to be on the cake">         
                              </div>
                        </div>
                    </div>


                </div>
                <button type="submit" name= "submitbutton" class="btn btn-primary">
                    order
                </button>
            </form>
            <footer>
                &copy; Company 2022
            </footer>



        </div>
    </main>
    
   <!-- scripts file -->
   <?php
        require_once('connections/scripts.php')
    ?>  
</body>
</html>