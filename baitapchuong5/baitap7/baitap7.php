<!DOCTYPE html>
<html>
<head>
    <title>Dãy Số từ 1 đến 100</title>
    <style>
        /* Định dạng cho số chẵn */
        .even {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Dãy Số từ 1 đến 100</h2>
    <?php
    // Tạo dãy số từ 1 đến 100
    for ($i = 1; $i <= 100; $i++) {
        // Kiểm tra số chẵn và in đậm nếu là số chẵn
        if ($i % 2 == 0) {
            echo "<span class='even'>$i</span> ";
        } else {
            echo "$i ";
        }
    }
    ?>
</body>
</html>
