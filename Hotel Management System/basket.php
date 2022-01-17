<?php 
require_once 'include/session.php';
 $title = 'Show Cost ';
 require_once 'include/header.php';
 require_once 'include/auth_check.php';
 require_once 'db/conn.php';
 $results = $crud -> getRoomTypes();


    $id = $_SESSION['id'];

   


    /** @var TYPE_NAME $user */
    $customer = $user -> getUserbySessionId($id);




?> 



<div class="container ">
    <h1 class="text-center mt-3">Shopping Process</h1>
<form  method="post" class="mt-5" action="cost.php">
    
  <div class="form-group">
    <label for="firstname" class="h1">User:<?php echo $customer['username'] ?></label> <!-- Username -->
    
   
  </div>
  <div class="form-group2">
    <label for="surname" class="h1">Number of Person</label>
    <br>
    <input type="text" required class="form-control p-3" id="person-num" name="person-num"  placeholder="How many people will you be?">
   
  </div>
  <br><br>
    <h3>Verify Your Room Type</h3>
  <select class="form-select h3 mt-3" style="display: block;" name="room-type" >
     <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
      
       <option value="<?php echo $r['room_id'] ?>"><?php echo $r['room_name']; ?></option>


     <?php } ?>
  </select>

  <button type="submit" name="submit-btn" class="btn btn-primary">Show cost</button>
</form>
</div>





<?php 
 require_once 'include/footer.php';
?> 