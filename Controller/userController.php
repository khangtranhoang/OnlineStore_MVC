<?php
session_start();
include_once('../Models/user_model.php');
echo "value : ".$_SERVER['REQUEST_METHOD'];
class control_user{
    public function invoke(){
        if(isset($_POST['btnAction'])){
            if($_POST['btnAction']=='login'){
                $username = $_POST['username_login'];
                $passwd= $_POST['passwd_login'];
                $user_model = new user_Model();
                
                $user_obj = $user_model->checkLogin($username,$passwd);
                if(isset($user_obj) && $user_obj!=''){
                    $_SESSION['user']=$user_obj->user_name;
                    $_SESSION['user_role']=$user_obj->user_role;
                    unset($_SESSION['login fail']);
                    // include_once('../OnlineStore/index.php');
                    header('Location: ../index.php');
                }
                else{
                    $_SESSION['login fail'] ='yes';
                    header('LOCATION: ../login_reg.php');
                }
            }
        }
    }
}

$Controller_user= new control_user();
$Controller_user->invoke();

?>