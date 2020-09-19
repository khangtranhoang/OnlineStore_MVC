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
            <a href="index.html" title="Home" class="topnav_bar_item topnav_icon_home" ><img  src="../ProductImg/home_icon.jpg" height="30px" width="25px"></a>
            <a class="topnav_bar_item" href="../Controller/gameController.php" title="Store products">Products</a>
            <!-- <a class="topnav_bar_item" href="index.html" title="Store products">Category</a> -->
            <?php
                session_start();
                if(!isset($_SESSION['user'])){
            ?>
                    <a class="topnav_bar_item" href="login_reg.php" title="Store products">Sign in</a>
            <?php
                }
                else{
                    ?>
                    <a class="topnav_bar_item" href="../index.php">Welcome</a>
                    <?php
                }
            ?>
        </div>
    </div>
</head>
<body>
    <h2>Chi tiet san pham</h2>
<?php
    echo "<table><tr><th>Product name</th><th>Price</th><th>Producer</th><th>Image</th></tr>";
    echo '<tr><td>'.$game->game_name."</td><td>".$game->game_price."</td><td>".$game->game_producer.'</td><td><img src="'.$game->game_image.'" height="80px" width="80px"></td>';
?>
    

<p><a href="../index.html">Home page</a></p>
</body>

</html>
