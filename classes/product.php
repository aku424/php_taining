<?php 
    class Product{
        private $name;
        private $image;
        private $price;
        private $id;

        public function __construct($name,$image,$price,$id){
            $this -> name = $name;
            $this -> image = $image ;
            $this -> price = $price;
            $this -> id = $id;
        }

        public function getName(){
            return $this -> name; 
        }
        public function getImage(){
            return $this -> image;
        }
        public function getPrice(){
            return $this -> price;
        }
        public function getId(){
            return $this -> id;
        }
    }
?>
