<!DOCTYPE html>
<html>
<head>
    <title>TÍNH TOÁN SỐ HỌC</title>
    <style>
        /* Đường kẻ dưới chữ */
        .underline {
            border-bottom: 1px solid black;
            display: inline-block;
            padding-bottom: 5px; /* Khoảng cách giữa đường kẻ và chữ */
        }
    </style>
</head>
<body>
    <h2><span class="underline">TÍNH TOÁN SỐ HỌC</span></h2>
    <form method="post">
        <label for="number1">Số thứ 1:</label>
        <input type="number" id="number1" name="number1" required><br><br>
        
        <label for="number2">Số thứ 2:</label>
        <input type="number" id="number2" name="number2" required><br><br>
        
        <label for="result">Kết quả:</label>
        <input type="text" id="result" name="result" readonly><br><br>
        
        <button type="submit" name="operation" value="add">Cộng</button>
        <button type="submit" name="operation" value="subtract">Trừ</button>
        <button type="submit" name="operation" value="multiply">Nhân</button>
        <button type="submit" name="operation" value="divide">Chia</button>
        <button type="submit" name="operation" value="mod">Mod</button>
    </form>

    <?php
    if(isset($_POST['operation'])) {
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operation = $_POST['operation'];

        switch($operation) {
            case 'add':
                $result = $number1 + $number2;
                break;
            case 'subtract':
                $result = $number1 - $number2;
                break;
            case 'multiply':
                $result = $number1 * $number2;
                break;
            case 'divide':
                if($number2 != 0) {
                    $result = $number1 / $number2;
                } else {
                    $result = "Không thể chia cho 0";
                }
                break;
            case 'mod':
                if($number2 != 0) {
                    $result = $number1 % $number2;
                } else {
                    $result = "Không thể chia cho 0";
                }
                break;
            default:
                $result = "Không hợp lệ";
        }

        echo "<p>Kết quả: $result</p>";
    }
    ?>
</body>
</html>
