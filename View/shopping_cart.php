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
            <a href="../index.html" title="Home" class="topnav_bar_item topnav_icon_home" ><img  src="../ProductImg/home_icon.jpg" height="30px" width="25px"></a>
            <a class="topnav_bar_item" href="../Controller/gameController.php" title="Store products">Products</a>
            <!-- <a class="topnav_bar_item" href="index.html" title="Store products">Categories</a> -->
            <a class="topnav_bar_item" href="../login_reg.php" title="Store products">Sign in</a>
        </div>
    </div>
</head>
<body>
<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
                    <?php
                    session_start();
					if(!empty($_SESSION["shopping_cart"]))
					{
                        
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td> <?php echo $values["item_price"]; ?></td>
						<td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 0);?></td>
						<td><a href="?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right"><?php echo number_format($total, 0); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
<?php

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>window.location="shopping_cart.php"</script>';
			}
		}
	}
}


?>
</body>

</html>
















