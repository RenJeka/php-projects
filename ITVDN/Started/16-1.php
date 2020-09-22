<?php
$myShop = [
    "apple" => ["name" => "apple", "price" => 0.2, "description" => "delicious apple"],
    "banana" => ["name" => "banana", "price" => 0.35, "description" => "banana banana!!!"],
    "apricot" => ["name" => "apricot", "price" => 0.7, "description" => "you can make a sweet jam!"],
];

foreach ($myShop as $product){
    echo "<b>$product[name]</b> cost <h3 style='display: inline-block'>$product[price]</h3>. Description: $product[description]";
    echo "<br/>";
}