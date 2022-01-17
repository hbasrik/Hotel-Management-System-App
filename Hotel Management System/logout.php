<?php 
  include_once 'include/session.php'
?>
<?php
   session_destroy();
   header('Location: index.php');

?>