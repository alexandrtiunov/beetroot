<?php

require_once 'data.php';

foreach ($product as $item){
    echo "<p>" . $item->getInformation() . $item->priceWithDiscount() . "</p>";
    //echo "<p>" . $item->priceWithDiscount() . "</p>";
}