<?php
 if(isset($_POST['submit-btn'])){
   $form_age= $_POST["age"];
   $name=trim($_POST["firstname"]);


   if($name ==" ") {
	$error_name=  "Please enter your name";
	}

   if($form_age < 0){
     $error_formage = "<span class='error'>Please enter your name.</span>";
     
   }
   if($form_age < 18){
    $error_formage = "<span class='error'>Please enter your name.</span>";
  }
   

 }
 
 ?>