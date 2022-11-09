<?php
session_start();
    include_once "../../Controllers/DonHangController.php";
    $controller = new DonHangController();
    $controller->invoke();
?>