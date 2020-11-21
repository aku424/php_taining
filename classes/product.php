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
        private function calPriceIncludedTax(){
            $tax = 1.1;
            return $this -> price * $tax;
        }
        public function displayPrice(){
            $price = $this ->calPriceIncludedTax();
            return $price."円";
        }
        public function getId(){
            return $this -> id;
        }
    }
?>
