<?php

function saveProduct(array $produit) {
  $file = fopen('produits.csv', 'a+');
  fputcsv($file, $produit);
  fclose($file);
}

function listProduct() {
  $products = [];
  $file = fopen('produits.csv', 'r');
  
  $produit = fgetcsv($file);

  while($produit)
  {
    array_push($products,$produit);
    $produit = fgetcsv($file);
  }

  return $products;
}