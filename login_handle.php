<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login_css.css">
    <style>

        
    </style>
</head>
<body>
<?php
    session_start();
    require_once"Models/config.php";
    if(isset($_SESSION['user']) || isset($_SESSION['admin'])){
      header('Location: index.html');
    }
    elseif(isset($_POST['action'])){
        switch ($_POST['action']){
            case 'login':
                echo 'a';
                break;
            case 'register':
                echo'b';
                break;
        }
    }

        // if(isset($_POST['username_login']) && isset($_POST['passwd_login'])){
        //     // echo 'username: '.$_POST['username_login'].'<br/>';

        // }


?>

</body>
</html>

