
<?php 

 $title = 'Success Page ';
 require_once 'include/header.php';
 require_once 'db/conn.php';
 
 if(isset($_POST['submit-btn'])){
     $fname = $_POST['firstname'];
     $sname= $_POST['surname'];
     $age= $_POST['age'];
     $room_type= $_POST['room-type'];

     
      if(empty($_POST["firstname"])){
         $name_error='<h1 class="text-center text-danger mt-3">You must  enter a name</h1>';
         echo $name_error;
      }
     if(empty($_POST["surname"])){
        $surname_error='<h1 class="text-center text-danger mt-3">You must  enter a surname</h1>';
        echo $surname_error;
     }
     if(($_POST["age"]) < 18){
      $age_error='<h1 class="text-center text-danger mt-3">You must  enter a suitable age</h1>';
      echo $age_error;
      }
      else {
         $isSuccess = $crud->insert($fname,$sname,$age,$room_type);
         if($isSuccess){
            echo '<h1 class="text-center text-success mt-3">Your reservation has been taken</h1>';
         }
         else{
            echo '<h1 class="text-center text-danger mt-3">There was an error in reservation process</h1>';
         }
      }
    
     


     
      

     


 }

?> 






<?php 
 require_once 'include/footer.php';
?> 

