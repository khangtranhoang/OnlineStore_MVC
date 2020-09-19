<!DOCTYPE html>
<html lang="en">
    <title>Intro page</title>
    <meta charset="utf-8">
        <style>
            a.topnav_bar_item{
                text-decoration: none;
                font-family: fantasy;
                color: ghostwhite;
                font-size: 25px;
                padding-left: 20px;
            }
            a.topnav_icon_home{
                padding: 10px;
            }
            head{
                background-color: darkgray;
            }
            table, th,td{
                border: 1px solid black;
            }
        </style>
<head>
    <div style="text-align: center;background-repeat: no-repeat; font-family: fantasy;color: crimson;background-image: url(../ProductImg/top_theme_2.jpg); font-size: 40px;"><h1>Online games store</h1></div>
    <div style="background-color : black;">
        <div id="topnav" style="height: 40px; width: 100%;overflow: hidden; position: relative; top: 0px;">
            <?php
                session_start();
                if(isset($_SESSION['user'])){
            ?>
            <a href="../index.php" title="Home" class="topnav_bar_item topnav_icon_home" ><img  src="../ProductImg/home_icon.jpg" height="30px" width="25px"></a>
            <?php        
                }else{
            ?>
            <a href="../index.html" title="Home" class="topnav_bar_item topnav_icon_home" ><img  src="../ProductImg/home_icon.jpg" height="30px" width="25px"></a>
            <?php        
                }
            ?>
            
            <a class="topnav_bar_item" href="../Controller/gameController.php" title="Store products">Products</a>
            <?php
                if(!isset($_SESSION['user'])){
            ?>
                    <a class="topnav_bar_item" href="../login_reg.php" title="Store products">Sign in</a>
            <?php
                }
                else{
                    ?>
                    <a class="topnav_bar_item" href="../index.php">Welcome</a>
                    <?php
                }
                #####################           ADD TO SHOPPING CART HANDLE ###################
                
            ?>
        </div>
    </div>
</head>
<body>
<?php
    $index=1;
    echo "<table><tr><th>Index</th><th>Product name</th><th>Price</th><th>Producer</th><th>Image</th><th></th></tr>";
    $index=1;
    foreach($gameList as $game){
        // echo '<tr><a href="?gid='.$game->game_id.'">'.$game->game_name.'</a>';
        ?>
        <form action="?action=add&id=<?php echo $game->game_id ?>" method="POST">
        <?php
        echo "<tr>
            <td>".$index.'</td>
            <td><a href="?gid='.$game->game_id.'">'.$game->game_name.'</a>'."</td>
            <td>".$game->game_price."</td>
            <td>".$game->game_producer.'</td>
            <td><img src="'.$game->game_image.'" height="80px" width="80px"></td>
            <td><input type="number" name="product_add_quantity" value="1" min="1"/>
            <input type="hidden" name="hidden_product_id" value="'.$game->game_id.'"/>
            <input type="hidden" name="hidden_product_name" value="'.$game->game_name.'"/>
            <input type="hidden" name="hidden_product_price" value="'.$game->game_price.'"/>
            <input type="submit" name="add_to_cart" value="add to cart" class="btn btn-success"/></td>
            
        </tr>';
        ?>
        </form>
        <?php
        $index++;
    }
    echo '</table>';
?>
<a href="../View/shopping_cart.php" style="text-decoration: none;">View cart</a>

    
<p><a href="../index.php">Home page</a></p>
</body>

</html>
