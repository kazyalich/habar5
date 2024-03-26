<?php

// Создание ассоциативного массива с информацией о товарах (название товара => количество на складе)
$products = [
    "Яблоки" => 15,
    "Бананы" => 5,
    "Апельсины" => 20,
    "Груши" => 8,
    "Киви" => 12
];

// Нахождение товаров, количество которых меньше 10 штук
$lowStockProducts = [];
foreach ($products as $product => $quantity) {
    if ($quantity < 10) {
        $lowStockProducts[$product] = $quantity;
    }
}

// Вывод товаров с количеством меньше 10 штук
echo "Товары с количеством меньше 10 штук:\n";
foreach ($lowStockProducts as $product => $quantity) {
    echo "- $product (Количество: $quantity)\n";
}

?>

