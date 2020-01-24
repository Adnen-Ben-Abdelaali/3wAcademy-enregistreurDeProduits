<?php
include "utilities.php";




if(array_key_exists("reference", $_POST)) {
  
  saveProduct($_POST);
}

$ourProducts = listProduct();
include "produits.phtml";
