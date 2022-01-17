<?php 
require_once 'db/conn.php';
require_once 'include/auth_check.php';

if(!$_GET['id']) {
    echo 'error';

}else {
    $id = $_GET['id'];

    $result = $crud -> deleteCustomer($id);

    if($result){

        header("Location: data_table.php");
    }
    else {
        echo '';
    }

}
?>