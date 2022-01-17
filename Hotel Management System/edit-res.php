<?php
require_once 'db/conn.php';

if(isset($_POST['submit-btn'])){
    $id = $_POST['id'];
    $fname = $_POST['firstname'];
    $sname= $_POST['surname'];
    $age= $_POST['age'];
    $room_type= $_POST['room-type'];

    /** @var TYPE_NAME $crud */
    $result = $crud -> editCustomer($id,$fname,$sname,$age,$room_type);


    if($result){
        echo "Loading...";
        header("Refresh:2; url=data_table.php");
        
    } else {
        echo "Error";
    }

}
else {
     echo 'Error';
}

?>