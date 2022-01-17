<?php

include_once 'include/session.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">
    
    <!-- I just want to Bootstrap for form page and datatables --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    
</head>


<header class="header">

    <div class="header-1">

        <a href="index.php" class="logo"> <i class="fa fa-hotel"></i> Hotel Management System </a>
        
            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>
       
            
       


        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>


           
            
            <?php
             if(!isset($_SESSION['id'])){
            
            ?>
                 <a href="#" class="fas fa-shopping-cart" ></a>
            <?php } else {  ?>
          
				
				<a href="../basket.php" class="fas fa-shopping-cart" style="color:#27ae60;"></a>
            <?php } ?> 

            
            <?php
             if(!isset($_SESSION['id'])){
            
            ?>
                 <a  href="../login.php"  class="fas fa-user"></a>
            <?php } else {  ?>
          
				
				<a  href="../logout.php" class="fas fa-sign-out-alt"></a>
            <?php } ?>    
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="/index.php">Home</a>
            <a href="#featured">Rooms</a>
            <a href="/form.php">Reservation</a>
            <a href="/data_table.php">Customers</a>
            <a href="/register.php">Register</a>

        </nav>
    </div>

</header>

