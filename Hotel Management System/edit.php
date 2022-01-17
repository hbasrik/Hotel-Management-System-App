<?php 
 $title = 'Edit Record ';
 require_once 'include/header.php';
 require_once 'include/auth_check.php';
 require_once 'db/conn.php';
 $results = $crud -> getRoomTypes();

if(!isset($_GET['id']))
{
   echo 'Error';
}
else {
  extract($_GET);
    $id = $_GET['id'];
    $customer = $crud -> getCustomerDetails($id);


 

?> 


<div class="container ">
    <h1 class="text-center mt-3">Edit Your Reservations</h1>
<form  method="post" class="mt-5" action="edit-res.php">
    <input type="hidden" name="id" value="<?php echo $customer['ID'] ?>" />
  <div class="form-group">
    <label for="firstname" class="h1">Firstname</label>
    <input type="text" class="form-control p-3" id="firstname" name="firstname" value="<?php echo $customer['Name']?>" placeholder="Enter your name">
   
  </div>
  <div class="form-group">
    <label for="surname" class="h1">Surname</label>
    <input type="text" class="form-control p-3" id="surname" name="surname" value="<?php echo $customer['Surname']?>" placeholder="Enter your surname">
   
  </div>
  <div class="form-group">
    <label for="age" class="h1">Age</label>
    <input type="number" class="form-control p-3" id="age" name="age" value="<?php echo $customer['Age']?>" placeholder="Enter your age">
   
  </div>

  <select class="form-select h3 mt-3" style="display: block;" name="room-type" >
     <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>

       <option value="<?php echo $r['room_id'] ?>" <?php if($r['room_id'] == $customer['RoomType'] ) echo 'selected' ?>><?php echo $r['room_name']; ?></option>


     <?php } ?>
  </select>
  <button type="submit" name="submit-btn" class="btn btn-warning">Save Chances</button>
</form>
</div>

<?php } ?>


<?php 
 require_once 'include/footer.php';
?> 




