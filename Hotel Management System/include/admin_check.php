<?php
    if($_SESSION['id'] != 1){
            echo '<h1 class="text-center text-danger mt-3">You need to logout  first.</h1>';
            header("Location: login.php");
    }
?>