



<?php
include_once("../Models/game_model.php");
class control_game{
    public function invoke(){
        if(isset($_SERVER['REQUEST_METHOD'])){
        ####################### HTTP POST REQUEST ##############################
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(isset($_POST['btnAction'])){
                    if($_POST['btnAction']=='Add product'){
                        echo 'game controller action: '.$_POST['btnAction'];
                    }
                }
            }
        }
        ####################### HTTP GET REQUEST #############################
        if(isset($_GET['gid'])){
            $game_model = new game_Model();
            $game = $game_model->getGameDetail($_GET['gid']);

            include_once("../View/gameDetail.php");
        }
        elseif(!isset($_GET['gid'])){
            $game_model = new game_Model();
            $gameList= $game_model->getAllGame();
            include_once("../View/gameList.php");
        }
        

        
    }
}

$C_game= new control_game();
$C_game->invoke();

?>
