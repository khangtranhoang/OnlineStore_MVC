<?php
    class user_Entity{
        public $user_id;
        public $user_name;
        public $user_passwd;
        public $create_date;
        public $available;
        public $role;

        public function __construct($_id,$_name,$_passwd,$__date,$_available,$_role)
        {
            $this->user_id=$_id;
            $this->user_name=$_name;
            $this->user_passwd=$_passwd;
            $this->create_date=$__date;
            $this->available=$_available;
            $this->role=$_role;
        }
    }



    









?>