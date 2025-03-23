<?php 

    require_once '../includes/connection.php';

    if(!isset($_SESSION['email'])){
        $user_id = $_SESSION['user_id'];
        header('Location: ../index.html');
    }

    include '../includes/post_login_header.php';


    if(isset($_SESSION['msg']) ){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
?>
