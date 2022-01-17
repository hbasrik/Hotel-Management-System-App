<?php

   $title = "Login Page";
   require_once 'include/header.php';
   require_once 'db/conn.php';

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
       $username = strtolower(trim($_POST['username']));
       $password = $_POST['password'];

       $new_password = md5($password.$username);


       /** @var TYPE_NAME $user */
       $result = $user -> getUser($username,$new_password);

       if(!$result){
           echo '<div class="alert alert-danger">Username or Password is incorrect!</div>';
       }else {
           $_SESSION['username']= $username;
           $_SESSION['id']= $result['id'];
           header("Location: data_table.php");
       }
   }

?>
<div class="container "  style="width:40%">
<h1 class="text-center"><?php echo $title ?></h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
       <table class="table table-sm">
         <tr>
             <td><label for="username" class="mt-3">Username: *</label></td>
             <td><input type="text" name="username" class="form-control mt-3" id="username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">

             
            </td>
         </tr>
         <tr>
             <td><label class="mt-3" for="password">Password: *</label></td>
             <td><input type="password" name="password" class="form-control mt-3" id="password">
             </td>
         </tr> 
       </table> <br/><br/>

       <input type="submit" value="Login" class="btn btn-primary btn-block p-2"><br/>
       <a href="#"> Forgot Password </a>

    </form><br/><br/><br/><br/>
</div>    

 