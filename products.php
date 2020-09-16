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
    <div style="text-align: center;background-repeat: no-repeat; font-family: fantasy;color: crimson;background-image: url(top_theme_2.jpg); font-size: 40px;"><h1>Online games store</h1></div>
    <div style="background-color : black;">
        <div id="topnav" style="height: 40px; width: 100%;overflow: hidden; position: relative; top: 0px;">
            <a href="index.html" title="Home" class="topnav_bar_item topnav_icon_home" ><img  src="home_icon.jpg" height="30px" width="25px"></a>
            <a class="topnav_bar_item" href="products.php" title="Store products">Products</a>
            <a class="topnav_bar_item" href="index.html" title="Store products">Categories</a>

        </div>
    </div>
</head>
<body>
<?php
    $server_name = 'localhost';
    $username ='khangth';
    $passwd ='Password1!';
    $database_name ="OnlineStore";
    // create db connection
    $conn = mysqli_connect($server_name,$username,$passwd,$database_name);

    // check connection
    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }

    // public function getAllGame(){
    //     $db_entity = new Database();
    //     $conn = $db_entity->createConnection();
    //     $sql_query= "Select productID,productName,productPrice,productImg,producer From product";
    //     $list_game= array();
    //     $result = mysqli_query($conn,$sql_query);
    //     if(mysqli_num_rows($result)>0){
    //         while($row = mysqli_fetch_assoc($result)){
    //             $game_info = new game_Entity($row['productID'],$row['productName'],$row['productPrice'],$row['productImg'],$row['producer']);
    //             $list_game[] = $game_info;
    //         }
    //     }
    //     mysqli_close($conn);
    //     return $list_game;
    // }

        $sql_query="Select productID,productName,productPrice,productImg From product";
        $list_game =array();
        $result = mysqli_query($conn,$sql_query);
        $count=1;
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
               // echo "id : ".$row['productID']."-Name ".$row['productName']." Price: " .$row["productPrice"]." Image ".$row["productImg"]."<br/>";
                echo $count,'. productID : ',$row['productID'],' - ',$row['productName'],' - ',$row['productPrice'],' - ', '<img src="top_theme_2.jpg">';
            }
        }else{
            echo "0 results";
        }

        mysqli_close($conn);

?>
</body>

</html>
