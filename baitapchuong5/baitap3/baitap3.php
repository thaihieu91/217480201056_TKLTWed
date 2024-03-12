<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h1>hyuuuh k</h1>
<?php
// Tạo hai số ngẫu nhiên
$Sx = rand(1, 10);
$Sy = rand(1, 10);

// Tạo hai số ngẫu nhiên với điều kiện Sx > Sy
do {
    $Sx = rand(1, 10);
    $Sy = rand(1, 10);
} while ($Sx <= $Sy);

// Các phép tính
$sum = $Sx + $Sy;
$subtraction = $Sx - $Sy;
$multiplication = $Sx * $Sy;
if ($Sy != 0) {
    $division = $Sx / $Sy;
    $remainder = $Sx % $Sy;
} else {
    $division = "Không thể chia cho 0";
    $remainder = "Không thể chia cho 0";
}

// Xuất kết quả ra màn hình
echo "a. Từ hai biến cho trước (\$Sx=$Sx, \$Sy=$Sy): <br>";
echo "b. <br>";
echo "Cộng: $Sx + $Sy = $sum <br>";
echo "Trừ: $Sx - $Sy = $subtraction <br>";
echo "Nhân: $Sx * $Sy = $multiplication <br>";
echo "Chia: $Sx / $Sy = $division <br>";
echo "Chia lấy dư: $Sx % $Sy = $remainder <br>";
echo "c. <br>";
echo "Sx > Sy: $Sx > $Sy";
?>
</body>
</html>
