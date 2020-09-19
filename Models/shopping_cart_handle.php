<?php
session_start();
class cartHandle{
    public function addToCart($item_id,$item_name,$item_price,$item_quantity){
                    if(isset($_SESSION["shopping_cart"]))
                    {
                        // $item_array_id = array_column($_SESSION["shopping_cart"], $item_id);
                        // if(!in_array($item_id, $item_array_id))
                        // {
                        //     $item_array = array(
                        //         'item_id'			=>	$item_id,
                        //         'item_name'			=>	$item_name,
                        //         'item_price'		=>	$item_price,
                        //         'item_quantity'		=>	$item_quantity
                        //     );
                        //     array_push($_SESSION['shopping_cart'], $item_array);
                        // }
                        // else
                        // {

                        //     echo '<script>alert("Item Already Added")</script>';
                        //     echo " item already added to cart";

                        // }
                        $check= 0;
                        foreach($_SESSION['shopping_cart'] as $key => $value){
                            if($value['item_id'] == $item_id){
                                $_SESSION['shopping_cart'][$key]['item_quantity'] = $value['item_quantity'] +$item_quantity;
                                $check =1;
                                break;
                            }
                        }
                        if($check==0){
                            $item_array = array(
                                'item_id'			=>	$item_id,
                                'item_name'			=>	$item_name,
                                'item_price'		=>	$item_price,
                                'item_quantity'		=>	$item_quantity
                            );
                            array_push($_SESSION['shopping_cart'], $item_array);
                        }
                    }
                    else
                    {
                        $item_array = array(
                            'item_id'			=>	$item_id,
                            'item_name'			=>	$item_name,
                            'item_price'		=>	$item_price,
                            'item_quantity'		=>	$item_quantity
                        );
                        $_SESSION["shopping_cart"][0] = $item_array;
                    }


    }

}

?>