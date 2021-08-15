<?php
$product1 = array("Vee Vee", "Ma Ma", "Yum Yum");
$product2 = array("Milk", "Water", "Desk");
print_r(array_merge($product1,$product2));
echo "<br>";
print_r(array_merge($product2,$product1));
