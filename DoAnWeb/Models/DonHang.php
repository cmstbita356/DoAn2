<?php
    class DonHang
    {
        public $id;
        public $id_user;
        public $thanhtien;
        public $date;
        public $status;
        function __construct($id, $id_user, $thanhtien, $date)
        {
            $this->id = $id;
            $this->id_user = $id_user;
            $this->thanhtien = $thanhtien;
            $this->date = $date;
            $this->status = 1;
        }
    }
?>