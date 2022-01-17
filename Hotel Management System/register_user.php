<?php 
 $title = 'Success Page ';
 require_once 'include/header.php';
 require_once 'db/conn.php';
 
 if(isset($_POST["register-btn"])){

    if(!isset($_SESSION['id'])){

        $name= $_POST["username"];
        $password= $_POST["password"];
    
        /** @var TYPE_NAME $user */
        $register = $user -> insertUser($name,$password);
    
        if($register){
            echo '<h1 class="text-center text-success mt-3">Successfully registered</h1>';
        }
        else {
            echo '<h1 class="text-center text-danger mt-3">Registration Failed</h1>';
        }

    }else { echo '<h1 class="text-center text-danger mt-3">You need to logout  first.</h1>';}




 }
 else {
     header("location: index.php");
 }

?> 






<?php 
 require_once 'include/footer.php';
?> 