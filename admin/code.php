<?php session_start()?>
<?php 
if(isset($_POST['logout_btn'])){
    session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);
    header("Location: ../user/index.php");
}
?>