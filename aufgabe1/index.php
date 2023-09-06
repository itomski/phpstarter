<?php
session_start();

if(!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if(isset($_GET['a'])) {
    
    if($_GET['a'] == 'save') {
        $_SESSION['products'][] = trim(htmlspecialchars($_POST['product'], ENT_QUOTES, 'utf-8'));
    }

    if($_GET['a'] == 'delete') {
        unset($_SESSION['products'][$_GET['i']]);
    }
}

$products = $_SESSION['products'];
include_once 'template.php';