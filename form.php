<!DOCTYPE html>
<html>
<head>
    <title>Form Handling</title>
</head>
<body>
    <h2>User Information Form</h2>
    <form method="post">
        Name: <input type="text" name="name" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $age = $_POST['age'];
        echo "Hello $name, you are $age years old!";
    }
    ?>
</body>
</html>
