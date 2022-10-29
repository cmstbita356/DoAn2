<?php
session_start();
    include_once "../../Controllers/CartController.php";
    $ctrl = new CartController();
    $ctrl->invoke();
?>