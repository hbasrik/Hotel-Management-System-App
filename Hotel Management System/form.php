
<?php 
 if( isset($_POST['ajax']) && isset($_POST['age'])) {
  if( $_POST['age'] < 18 ){

     echo " You are not suitable for reservations";
  }
  else{
    echo " You are  suitable";
  }
  exit;
}
 $title = 'Form Page ';
 
 require_once 'include/header.php';
 require_once 'include/auth_check.php';
 require_once 'db/conn.php';
 $results = $crud -> getRoomTypes();




?>
<?php



?> 


<div class="container ">
 <form  method="POST" class="mt-5" action="success.php" id="Form">
  <div class="form-group">
    <label for="firstname" class="h1">Firstname</label>
    <input type="text"  class="form-control p-3" id="firstname" name="firstname" placeholder="Enter your name">
    
  </div>
  <div class="form-group">
    <label for="surname" class="h1">Surname</label>
    <input type="text"  class="form-control p-3" id="surname" name="surname" placeholder="Enter your surname">
    
  </div>
  <div class="form-group">
    <label for="age" class="h1">Age</label>
    <input type="number"  class="form-control p-3" id="age" name="age" placeholder="Enter your age">
    <div id='response'></div>
  </div>

  <select class="form-select h3 mt-3" style="display: block;" name="room-type" id="room-type">
     <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>

       <option value="<?php echo $r['room_id'] ?>"><?php echo $r['room_name']; ?></option>


     <?php } ?>
  </select>
  <button type="submit" name="submit-btn" class="btn btn-primary" id="submit-btn">Make the reservation</button>
  

</form>

</div>


<script>
        $(document).ready(function(){
            $('#age').keyup(function(){
                var age = $('#age').val();

                $.ajax({
                    type: 'post',
                    data: {ajax: 1,age: age},
                    success: function(response){
                        $('#response').text('Age Limit : ' + response);
                    }
                });
            });
        });

</script>

<?php 
 require_once 'include/footer.php';
?> 

<!--
   Firstname
   Surname
   Age (If he/she younger than 18 years old ,it will discount 30%)
   RoomType (1=Single,2=Double,3=King,4=Seaside)

 -->

