<!DOCTYPE html>
<html>
<head>
    <title>Bảng Cấp Số Nhân</title>
    <style>
        /* Định dạng cho bảng */
        table {
            width: 50%;
            border-collapse: collapse;
            margin: auto;
        }
        
        /* Định dạng cho ô trong bảng */
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        /* Định dạng cho dòng tiêu đề */
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Bảng Cấp Số Nhân</h2>
    <table>
        <tr>
            <th>Số n</th>
            <th>Số n^2</th>
        </tr>
        <?php
        // Tạo dữ liệu cho bảng
        for ($n = 0; $n <= 50; $n++) {
            $n_squared = $n * $n;
            echo "<tr>";
            echo "<td>$n</td>";
            echo "<td>$n_squared</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
