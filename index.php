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
    </style>    
<head>
    <link rel="stylesheet" href="CSS/login_css.css">
    <div style="text-align: center;background-repeat: no-repeat; font-family: fantasy;color: crimson;background-image: url(ProductImg/top_theme_2.jpg); font-size: 40px;"><h1>Online games store</h1></div>
    <div style="background-color : black;">
        <div id="topnav" style="height: 40px; width: 100%;overflow: hidden; position: relative; top: 0px;">
            <a href="index.php" title="Home" class="topnav_bar_item topnav_icon_home" ><img  src="ProductImg/home_icon.jpg" height="30px" width="25px"></a>
            <a class="topnav_bar_item" href="Controller/gameController.php" title="Store products">Products</a>
            <!-- <a class="topnav_bar_item" href="index.html" title="Store products">Categories</a> -->
            <?php
                session_start();
                if(!isset($_SESSION['user'])){
            ?>
                    <a class="topnav_bar_item" href="login_reg.php" title="Store products">Sign in</a>
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
    <h2>New Product:</h2>
    <?php echo 'current user session: '.$_SESSION['user'] ?>
    <form action="Controller/gameController.php" method="POST">
    <div class="container">
        <label for="username_label"><b>Product name</b></label>
        <input type="text" placeholder="Enter name" name="product_name" required>
        <label for="username_label"><b>Product price</b></label>
        <input type="text" placeholder="Enter price" name="product_price" required>
        <label for="username_label"><b>Product image(directory path)</b></label>
        <input type="text" placeholder="Enter image_name.extension" name="product_image" required>
        <label for="username_label"><b>Product producer</b></label>
        <input type="text" placeholder="Enter producer" name="product_producer" required>
        <label for="username_label"><b>Product availability</b></label>
        <input type="text" placeholder="Enter Username" name="available" required>
        <label for="username_label"><b>quantity</b></label>
        <input type="text" placeholder="Enter quantity" name="product_quantity" required>
        <input type="submit" class="button" name="btnAction" value="Add product">
    </div>
</body>

</html>
