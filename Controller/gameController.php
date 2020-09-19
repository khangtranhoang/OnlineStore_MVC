



<?php
include_once("../Models/game_model.php");
include_once("../Models/shopping_cart_handle.php");
include_once("../Models/game_entity.php");
class control_game{
    public function invoke(){
        if(isset($_SERVER['REQUEST_METHOD'])){
        ####################### HTTP POST REQUEST ##############################
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(isset($_POST['btnAction'])){
                    if($_POST['btnAction']=='Add product'){
                        $game_info = new game_Entity(0,$_POST['product_name'],$_POST['product_price'],$_POST['product_image'],$_POST['product_producer'],$_POST['product_available'],$_POST['product_quantity']);
                        $game_model = new game_Model();
                        $game_model->insertGame($game_info);
                        // header("Location: ../index.php ");
                    }
                }elseif(isset($_POST['add_to_cart'])){
                    $item_id = $_POST['hidden_product_id'];
                    $item_name = $_POST['hidden_product_name'];
                    $item_price = $_POST['hidden_product_price'];
                    $item_quantity = $_POST['product_add_quantity'];
                    $shop_cart = new cartHandle();
                    $shop_cart->addToCart($item_id,$item_name,$item_price,$item_quantity);
                    $game_model = new game_Model();
                    $gameList= $game_model->getAllGame();
                    include_once("../View/gameList.php");
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
