<!DOCTYPE html>
<html>
<head>
    <title>TÍNH USCLN VÀ BSCNN</title>
    <style>
        /* Định dạng cho form */
        form {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        /* Định dạng cho input */
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        /* Định dạng cho nút tính toán */
        button {
            width: 49%;
            padding: 8px 0;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        /* Định dạng cho kết quả */
        #result {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Sử dụng flexbox để căn chỉnh nút */
        .button-container {
            display: flex;
            justify-content: space-between;
        }

        /* Định dạng cho đường kẻ dưới chữ */
        hr {
            border: none;
            border-bottom: 1px solid #ccc;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <form method="post">
        <h2>TÍNH USCLN VÀ BSCNN</h2>
        <hr> <!-- Đường kẻ dưới chữ "TÍNH USCLN VÀ BSCNN" -->
        <label for="number1">Số thứ 1:</label>
        <input type="number" id="number1" name="number1" required>
        
        <label for="number2">Số thứ 2:</label>
        <input type="number" id="number2" name="number2" required>
        
        <button type="submit" name="result">Kết quả</button>
        <?php
        if(isset($_POST['result'])) {
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];

            // Hàm tìm ước số chung lớn nhất (USCLN)
            function findUSCLN($a, $b) {
                while ($b != 0) {
                    $remainder = $a % $b;
                    $a = $b;
                    $b = $remainder;
                }
                return $a;
            }

            // Hàm tìm bội số chung nhỏ nhất (BSCNN)
            function findBSCNN($a, $b) {
                return $a * $b / findUSCLN($a, $b);
            }

            $uscln = findUSCLN($number1, $number2);
            $bscnn = findBSCNN($number1, $number2);

            echo "<label for='result'>Kết quả: USCLN: $uscln, BSCNN: $bscnn</label>";
        }
        ?>
        <div class='button-container'>
            <button type='submit' name='uscln_button'>USCLN</button>
            <button type='submit' name='bscnn_button'>BSCNN</button>
        </div>
    </form>
</body>
</html>
