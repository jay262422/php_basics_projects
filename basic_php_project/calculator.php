<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>PHP Simple Calculator</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <select name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        if ($operation == "add") {
            $result = $num1 + $num2;
            echo "Result: $result";
        } elseif ($operation == "subtract") {
            $result = $num1 - $num2;
            echo "Result: $result";
        } elseif ($operation == "multiply") {
            $result = $num1 * $num2;
            echo "Result: $result";
        } elseif ($operation == "divide") {
            if ($num2 != 0) {
                $result = $num1 / $num2;
                echo "Result: $result";
            } else {
                echo "Cannot divide by zero!";
            }
        }
    }
    ?>
</body>
</html>
