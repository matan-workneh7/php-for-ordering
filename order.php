<!DOCTYPE html>
<html>
<head>
    <title>Pizza Order</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        form { background:rgb(231, 93, 93); padding: 20px; width: 300px; border-radius: 10px; }
        input[type="text"], input[type="submit"] { margin-top: 10px; border-radius: 10px; }
    </style>
</head>
<body>
    <h2>Order Pizza</h2>
    <form action="order.php" method="post">
        <label>How many burgers?</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="Order">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $price = 168;
            $quantity = $_POST["quantity"];
            $total = $quantity * $price;
            echo "<p>You ordered $quantity burger(s).</p>";
            echo "<p>Total: $$total Birr</p>";
        }
    ?>
</body>
</html>