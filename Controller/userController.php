<?php
session_start();
include_once('../Models/user_model.php');
// echo "value : ".$_SERVER['REQUEST_METHOD'];
class control_user{
    public function invoke(){
        if(isset($_POST['btnAction'])){
            echo '1<br/>';
            if($_POST['btnAction']=='login'){
                echo '2<br/>';
                $username = $_POST['username_login'];
                $passwd= $_POST['passwd_login'];
                $user_model = new user_Model();
                $user_obj = $user_model->checkLogin($username,$passwd);
                $_SESSION['user']=$user_obj->user_name;
                $_SESSION['user_role']=$user_obj->user_role;
                // include_once('../OnlineStore/index.php');
                header('Location: ../index.php');
            }
        }
    }
}

$Controller_user= new control_user();
$Controller_user->invoke();

?>