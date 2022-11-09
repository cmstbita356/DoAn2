<?php
    class Chitietdh
    {
        public $id_dh;
        public $id_product;
        public $price;
        public $soluong;
        function __construct($id_dh, $id_product, $price, $soluong)
        {
            $this->id_dh = $id_dh;
            $this->id_product = $id_product;
            $this->price = $price;
            $this->soluong = $soluong;
        }
    }
?>