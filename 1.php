<?php
// өгөгдлүүд
$totalCargo = 10000; // нийт ачаа (тн)
$distanceOneWay = 10; // км
$belazCapacity = 100;
$porterCapacity = 5;

// түлшний зарцуулалт 100 км тутамд
$belazFuelPer100 = 100;
$porterFuelPer100 = 10;

// 10 км-д хэдэн литр зарцуулах вэ?
$belazFuelPer10 = $belazFuelPer100 / 10; // 10 л
$porterFuelPer10 = $porterFuelPer100 / 10; // 1 л

// нийт түлшний тооцоо
$belazTotalFuel = 0;
$porterTotalFuel = 0;

// БелАЗ
for ($carried = 0; $carried < $totalCargo; $carried += $belazCapacity) {
    // очих ба буцах 20 км
    $belazTotalFuel += $belazFuelPer10 * 2;
}

// Портер
for ($carried = 0; $carried < $totalCargo; $carried += $porterCapacity) {
    // очих ба буцах 20 км
    $porterTotalFuel += $porterFuelPer10 * 2;
}

echo "БелАЗ нийт түлш: " . $belazTotalFuel . " литр<br>";
echo "Портер нийт түлш: " . $porterTotalFuel . " литр<br>";

// Аль нь ашигтай вэ?
if ($belazTotalFuel < $porterTotalFuel) {
    echo "👉 БелАЗ илүү ашигтай!";
} else {
    echo "👉 Портер илүү ашигтай!";
}
?>
