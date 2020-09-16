
<?php
    class game_Entity{
        public $game_id;
        public $game_name;
        public $game_price;
        public $game_quantity;
        public $game_image;
        public $game_producer;
        public $game_availability;
//productID,productName,productPrice,productImg,producer
        public function __construct($_id="",$_name,$_price,$_image,$_producer,$_available="",$_quantity="")
        {
            # code...
            $this->game_id = $_id;
            $this->game_name = $_name;
            $this->game_price =$_price;
            $this->game_image = $_image;
            $this->game_producer=$_producer;
            $this->game_availability = $_available;
            $this->game_quantity = $_quantity;
        }
        
    }




?>