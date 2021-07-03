<!-- header php joined -->
<?php 
session_start();
include('includes/header.php'); 
require_once('./database.php');

$items;
  //if(isset($_SESSION['user_name'])){
      $query = "SELECT * FROM items";
      $row = mysqli_query($database,$query);
      $items = mysqli_fetch_all($row);
      //print_r($items);
      //}

      $additional_items;
      //if(isset($_SESSION['user_name'])){
          $query1 = "SELECT * FROM additional_items";
          $row1 = mysqli_query($database,$query1);
          $additional_items = mysqli_fetch_all($row1);
          //print_r($items);
          //}
    
        //   echo print_r($additional_items);
?>


<title> Rice </title>
<!-- end -->



<!-- hero text -->
    <div class="container-fluid" style="position: relative;">
        <img src="images/img1.jpg " alt="Snow " style="width:100%  ; height: 50vh; ">

        <div class="content-block" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); ">
            <h1 style="color:white; font-weight:bold;">Buy & Sell Near You </h1>
            <p style="color:white; ">Join the millions who buy and sell from each other <br> everyday in local communities around the world
            </p>

        </div>
    </div>
    <!-- end -->

    <!-- cards--------------------------------------------------------------------------- -->
    
    <div class="container mt-5">
        <div class="row ">
<?php 
 if(isset($items)){
    foreach($items as $item){

            echo "<div class='col-lg-4 col-md-6 col-sm-6 mb-2'>";
 echo  "<form action='cart.php' method='post'>";
                echo "<div class='card text-center'>";
                   echo " <div class='card-block'>";
                       echo " <img src='$item[4]' alt='' class='img-fluid'>";
                       echo " <div class='card-title'>";
                           echo " <h4>$item[1]</h4>";
                       echo " </div>";
                       echo " <div class='card-text'>";
                          echo "$item[2]";
                       echo " </div>";
                       echo "<hr>";
                       echo  "<h6>Default Price for one: <b>LKR .$item[3].00</b></h6>";
                        //----------------------------- button for item customization----------------------------------------- --
                       echo " <hr>";
                        echo "<div class='container' style='display: flex;justify-content: center;margin-bottom: 10px;'>";
                           echo " <p class='label' style='margin-right: 20px;padding: 5px;'>category</p>";
                            
                           echo " <select class='form-select ' aria-label='Default select example'>"; 

                           foreach($additional_items as $additional_item){

                                 echo " <option id='janaka' selected>$additional_item[1]</option>";
                           }
                           echo " </select>";
                        echo "</div>";
                       echo " <div id='item-button' class='container ' style='display: flex; justify-content: center;'>";
                            echo "<p class='label'>customize addons</p>";

                           echo " <input type='number' value='50' step='50' min='50' max='250'>";
                       echo " </div>";

                        //---------------------------- button for item customization end----------------------------------------- 

                       echo " <hr>";
                        echo "<div class='container' style='display: flex;justify-content: center;'>";
                           echo " <p class='label' style='margin-right: 20px;padding: 5px;'>Portion</p>";
                            echo "<select class='form-select ' aria-label='Default select example'>";
               echo " <option id='janaka' selected>Normal</option>";
               echo " <option id='janaka' value='1'>large</option>";
               echo " <option id='janaka' value='2'>small</option>";
             echo " </select>";
                       echo " </div>";
                       echo " <hr>";
                        // <a href='#' class='btn btn-danger' style='margin:2px'>view category</a> 
                         
                       echo "<input class='btn btn-success' style='margin:2px' type='button' value='Order Now' name=''> ";

                   echo " </div>";
               echo " </div>";
               echo  "</form>";   
            echo "</div>";
    }}
                      
?>
</div>
</div>
<?php
            // <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
            //     <di class="card text-center">
            //         <div class="card-block">
            //             <img src="img/s2.jpg" alt="" class="img-fluid">
            //             <div class="card-title">
            //                 <h4>food8</h4>
            //             </div>
            //             <div class="card-text">
            //                 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, harum.
            //             </div>
            //             <a href="#" class="btn btn-danger" style="margin:2px">view category</a>
            //         </div>
            //     </di>
            // </div>
            // <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
            //     <di class="card text-center">
            //         <div class="card-block">
            //             <img src="img/s3.jpg" alt="" class="img-fluid">
            //             <div class="card-title">
            //                 <h4>food7</h4>
            //             </div>
            //             <div class="card-text">
            //                 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, harum.
            //             </div>
            //             <a href="#" class="btn btn-danger" style="margin:2px">view category</a>
            //         </div>
            //     </di>
            // </div>
            // <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
            //     <di class="card text-center">
            //         <div class="card-block">
            //             <img src="img/s2.jpg" alt="" class="img-fluid">
            //             <div class="card-title">
            //                 <h4>food6</h4>
            //             </div>
            //             <div class="card-text">
            //                 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, harum.
            //             </div>
            //             <a href="#" class="btn btn-danger" style="margin:2px">view category</a>
            //         </div>
            //     </di>
            // </div>
            // <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
            //     <di class="card text-center">
            //         <div class="card-block">
            //             <img src="img/s2.jpg" alt="" class="img-fluid">
            //             <div class="card-title">
            //                 <h4>food5</h4>
            //             </div>
            //             <div class="card-text">
            //                 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, harum.
            //             </div>
            //             <a href="#" class="btn btn-danger" style="margin:2px">view category</a>
            //         </div>
            //     </di>
            // </div>
            // <div class="col-lg-4 col-md-6 col-sm-6 mb-2 ">
            //     <di class="card text-center">
            //         <div class="card-block">
            //             <img src="img/s3.jpg" alt="" class="img-fluid">
            //             <div class="card-title">
            //                 <h4>food1</h4>
            //             </div>
            //             <div class="card-text">
            //                 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, harum.
            //             </div>
            //             <a href="#" class="btn btn-danger" style="margin:2px">view category</a>
            //         </div>
            //     </di>
            // </div>


     
    ?>
    <!--  cards end--------------------------------------------------------------------------- -->


<!-- footer php joined -->
<?php include('includes/footer.php'); ?> 
<!-- end -->