<?php 
 $title = 'Admin Page ';

 require_once 'include/header.php';
 require_once 'db/conn.php';
 require_once 'include/admin_check.php';
 



 $results = $crud -> getCustomers();
?> 
<script>
        $(function() {
     
    $("#btnJSON").click(function() {
      $.getJSON("room.json", function(data) {

        var out = "<table  class='table'><tr><th>Room ID</th><th>Room Name</th></tr>";
        for (var i = 0; i < data.length; i++) {
          out += "<tr>";
          
          out += "<td>" + data[i].id + "</td>";
          out += "<td>" + data[i].name + "</td>";
          out += "</tr>";
        }
        out += "</table>";
        $("#roomContainer").html(out);
      });
    });
});

</script>
<h1 class="text-center mt-3">Admin  Page</h1>
<div class="container "> 
     <table class="table">
      <tr>
           <th>#</th>
           <th>Firstname</th>
           <th>Surname</th>
           <th>Age</th>
           <th>Actions</th>
     </tr>
      <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
        
         <tr>
             <td><?php echo $r['ID'] ?></td>
             <td><?php echo $r['Name'] ?></td>
             <td><?php echo $r['Surname'] ?></td>
             <td><?php echo $r['Age'] ?></td>
             
             <td >
                 <a href="view.php?id=<?php echo $r['ID'] ?>" class="btn btn-primary mb-3">View</a>
                 <a href="edit.php?id=<?php echo $r['ID'] ?>" class="btn btn-warning mb-3">Edit</a>
                 <a href="delete.php?id=<?php echo $r['ID'] ?>" class="btn btn-danger mb-3">Delete</a>
            </td>
         </tr>
         
      <?php } ?>
  </table>
 
</div>




<?php 
 require_once 'include/footer.php';
?> 

