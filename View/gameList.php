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
                session_start();
                if(!isset($_SESSION['user'])){
            ?>
                    <a class="topnav_bar_item" href="../login_reg.php" title="Store products">Sign in</a>
            <?php
                }
                else{
                    ?>
                    <a class="topnav_bar_item" href="index.php">Welcome</a>
                    <?php
                }
            ?>
        </div>
    </div>
</head>
<body>
<?php
    $index=1;
    // foreach($gameList as $game){
    //     echo "No. ".$index."- ID : ".$game->game_id." product name: ".$game->game_name.' price :'.$game->game_price.' producer :'.$game->game_producer.'<img src="'.$game->game_image.'" height="80px" width="80px">'."<br/>";
    //     $index++;
    // }
    echo "<table><tr><th>Index</th><th>Product name</th><th>Price</th><th>Producer</th><th>Image</th></tr>";
    $index=1;
    foreach($gameList as $game){
        // echo '<tr><a href="?gid='.$game->game_id.'">'.$game->game_name.'</a>';
        echo "<tr><td>".$index.'</td><td><a href="?gid='.$game->game_id.'">'.$game->game_name.'</a>'."</td><td>".$game->game_price."</td><td>".$game->game_producer.'</td><td><img src="'.$game->game_image.'" height="80px" width="80px"></td>';
        $index++;
    }
    echo '</table>';
?>
    
<!-- <img src="../ProductImg/AC_Odyssey.jpg"> -->
<p><a href="../index.html">Home page</a></p>
</body>

</html>
