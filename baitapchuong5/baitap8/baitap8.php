<!DOCTYPE html>
<html>
<head>
    <title>Listbox Danh Sách Năm</title>
</head>
<body>
    <h2>Chọn năm:</h2>
    <form method="post">
        <select name="year">
            <?php
            // Lặp qua các năm từ 1900 đến năm hiện tại
            $current_year = date("Y");
            for ($year = 1900; $year <= $current_year; $year++) {
                echo "<option value='$year'>$year</option>";
            }
            ?>
        </select>
        <button type="submit" name="submit">Chọn</button>
    </form>
    <?php
    // Xử lý khi form được submit
    if (isset($_POST['submit'])) {
        $selected_year = $_POST['year'];
        echo "<p>Bạn đã chọn năm: $selected_year</p>";
    }
    ?>
</body>
</html>
