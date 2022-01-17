<?php 
 $title = 'Details Page ';
 require_once 'include/header.php';
 require_once 'db/conn.php';

 

 if(isset($_GET['id'])){
   $id =  $_GET['id'];
   $result = $crud->getCustomerDetails($id);
 } else {
     echo "<h1 class='text-danger'>Error</h1>";
 }

 $cost=0;



 
?> 
<h1 class="text-center mt-3">Details  Page</h1>
<div class="container">
<div class="card mx-auto mt-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">
        <?php echo $result['Name'] . ' ' . $result['Surname']; ?>
        
    </h5>
    <h6 class="card-subtitle mb-2 text-muted">
      <?php echo $result['room_name'];  ?> <p>Room</p>
    </h6>
    <p class="card-text">
        Age: <?php echo $result['Age'];  ?>
    </p>
   

     
  </div>

 </div>
</div>


</div>

<?php 
 require_once 'include/footer.php';
?> 