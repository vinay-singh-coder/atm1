<?php
session_start();
unset( $_SESSION['id']);
unset( $_SESSION['name'] );
unset( $_SESSION['email']);
unset( $_SESSION['phone_number']);
unset( $_SESSION['avl_bal']);
header("location:index.php");

?>