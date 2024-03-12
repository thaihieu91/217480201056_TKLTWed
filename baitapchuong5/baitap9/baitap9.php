<!DOCTYPE html>
<html>
<head>
    <title>BẢNG CỬU CHƯƠNG</title>
    <style>
        /* Định dạng cho bảng lớn */
        table.outer-table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            margin-top: 20px;
        }

        /* Định dạng cho bảng nhỏ */
        table.inner-table {
            width: 25%; /* Rộng hơn so với trước */
            border-collapse: separate; /* Loại bỏ các đường kẻ mờ */
            border-spacing: 0px; /* Không có khoảng cách giữa các ô */
            float: left;
            margin-right: 10px; /* Giảm khoảng cách phải giữa các bảng nhỏ */
            margin-left: 10px; /* Giảm khoảng cách trái giữa các bảng nhỏ */
            margin-bottom: 10px; /* Giảm khoảng cách dưới giữa các bảng nhỏ */
            border-radius: 10px; /* Bo tròn viền bảng */
            overflow: hidden; /* Ẩn phần viền bên ngoài */
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75); /* Đổ bóng cho bảng */
        }
        
        /* Định dạng cho ô trong bảng */
        th, td {
            border: none; /* Loại bỏ đường viền */
            padding: 8px;
            text-align: center;
            white-space: nowrap; /* Ngăn các dòng xuống dòng */
        }

        /* Định dạng cho dòng tiêu đề */
        th {
            background-color: #f2f2f2;
        }

        /* Định dạng cho tiêu đề */
        h1 {
            text-align: center;
            color: #007bff;
            font-size: 36px; /* Kích thước lớn hơn */
            margin-bottom: 10px; /* Giảm khoảng cách dưới tiêu đề */
        }
    </style>
</head>
<body>
    <h1>BẢNG CỬU CHƯƠNG</h1>
    <table class="outer-table">
        <?php
        // Tạo bảng cửu chương từ 1 đến 10
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 5 == 1) {
                echo "<tr>"; // Bắt đầu mỗi hàng mới trong bảng lớn
            }
            echo "<td>";
            echo "<table class='inner-table'>";
            // Tạo bảng nhỏ cho bảng cửu chương $i
            for ($j = 1; $j <= 10; $j++) {
                echo "<tr>";
                echo "<td>$i x $j = " . ($i * $j) . "</td>"; // Hiển thị phép tính và kết quả
                echo "</tr>";
            }
            echo "</table>";
            echo "</td>";
            if ($i % 5 == 0) {
                echo "</tr>"; // Kết thúc mỗi hàng trong bảng lớn
            }
        }
        ?>
    </table>
</body>
</html>
