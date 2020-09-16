<?php
    include_once("../Models/user_entity.php");
    include_once("../Models/database_con.php");

    class user_Model{
        public function __construct()
        {
            
        }
        public function checkLogin($username,$passwd){
            $db_entity = new Database();
            $conn = $db_entity->createConnection();
            $user_obj = '';
            $sql_query = "Select * from user where username='".$username."' and password='".$passwd."'";
            $result = mysqli_query($conn,$sql_query); 
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    $user_info = new user_Entity($row['userID'],$row['username'],$row['password'],$row['created_date'],$row['available'],$row['roleID']);
                    $user_obj=$user_info;
                }
            }
            mysqli_close($conn);
            return $user_obj;
        }

    }


?>