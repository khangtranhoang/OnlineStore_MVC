<?php
    include("../Models/game_entity.php");
    include_once("../Models/database_con.php");
    class game_Model{
        public function __construct(){

        }
        public function getAllGame(){
            $db_entity = new Database();
            $conn = $db_entity->createConnection();
            $sql_query= "Select productID,productName,productPrice,productImg,producer From product where quantity >0 and available =1 ";
            $list_game= array();
            $result = mysqli_query($conn,$sql_query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    // success here
                    $game_info = new game_Entity($row['productID'],$row['productName'],$row['productPrice'],$row['productImg'],$row['producer']);
                    array_push($list_game,$game_info);
                }
            }
            mysqli_close($conn);
            return $list_game;
        }
        
        public function getGameDetail($gid){
            $allGame = $this->getAllGame();
            foreach($allGame as $game){
                if($game->game_id==$gid){
                    return $game;
                }
            }
        }
        public function insertGame(game_Entity $entity){
            $db_entity = new Database();
            $conn = $db_entity->createConnection();
            $sql_queri = 'Insert  into product(productName,productPrice,productImg,producer,available,quantity) values("'.$entity->game_name.'",'.$entity->game_price.',"'.$entity->game_image.'","'.$entity->game_producer.'",'.$entity->game_availability.','.$entity->game_quantity.')';
            if(mysqli_query($conn,$sql_queri)){
                
            }else{
                echo "Error: ".$sql_queri." ".mysqli_error($conn);
            }
            mysqli_close($conn);
        }

        
    }
















?>