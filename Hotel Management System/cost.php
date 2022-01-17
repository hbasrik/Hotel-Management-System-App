
<?php 
 $title = 'Cost Page ';
 require_once 'include/header.php';
 require_once 'include/auth_check.php';
 require_once 'db/conn.php';

 

 
 if(isset($_POST['submit-btn'])){
 
    $room_type= $_POST['room-type'];
 
     $cost = 0;
 
     switch ($room_type) {
         case 1:
             $cost=50;
             break;
         case 2:
             $cost=100;
             break;
         case 3:
             $cost=200;
             break;
         case 4:
             $cost=250;
             break;
     }
 
 
 
     $num = $_POST['person-num'] * $cost ;
 

     
    
    
 }
  
 




 
?> 
<h1 class="text-center mt-3">Cost  Page</h1>
<div class="container" style="max-width:800px;">

<h1 class="text-center text-success mt-3">Your cost is  <?=$num?> $</h1>
  
  <div class="img-container mx-auto text-center">
  <img src="/image/Blue-Credit-Card-PNG.png" style="max-width: 40%;"  alt="Responsive image">
  </div>

  <div class="form-group">
    <label for="cardNumber">Card Number</label>
    <input type="number" required class="form-control" id="numberinput"  placeholder="Enter Card Number">
    
  </div>
  <div class="form-group">
    <label for="cardDate"></label>
    <input type="text" required class="form-control" id="date"  placeholder="MM/YY">
    
  </div>

  <div class="form-group">
    <label for="cvv"></label>
    <input type="password" required class="form-control" id="cvv"  placeholder="CVV">
    
  </div>
  <div class="form-group">
    <label for="name"></label>
    <input type="text" required class="form-control" id="name"  placeholder="Name on the Card">
    
  </div>
  <button   class="btn btn-primary" onclick="process()">Make Payment</button>


</div>
<script>
function process() {
  alert("Complete!!!");
  window.location.href = "index.php";
}
</script>
