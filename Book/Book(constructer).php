<?php

    class Book{
        private $title;
        private $price;
        private $Author;

        public function __construct($new_title, $new_price, $new_Author){
            $this->title = $new_title;
            $this->price = $new_price;
            $this->price = $new_Author;
        }
        public function getTitle(){
            return $this->title;
        }

        public function getPrice(){
            return $this->price;
        }
        public function getPrice(){
            return $this->Author;


        }




    }
?>