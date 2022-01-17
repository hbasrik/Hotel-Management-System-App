<?php 
$title = 'Register Page ';
 require_once 'include/header.php';
 require_once 'db/conn.php';

 

 
?> 


<div class="container "  style="width:40%">
<h1 class="text-center"><?php echo $title ?></h1>
    <form action="register_user.php" method="post">
       <table class="table table-sm">
         <tr>
             <td><label for="username" class="mt-3">Username: *</label></td>
             <td><input type="text" required name="username" class="form-control mt-3" id="username" >
             
             
            </td>
         </tr>
         <tr>
             <td><label class="mt-3" for="password">Password: *</label></td>
             <td><input type="password" required name="password" class="form-control mt-3" id="password">
             </td>
         </tr> 
       </table> <br/><br/>

       <input type="submit" name="register-btn" value="Register" class="btn btn-primary btn-block p-2"><br/>
       

    </form><br/><br/><br/><br/>
</div>  


<?php 
 require_once 'include/footer.php';
?> 