<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
    <h2>Add a New User</h2>
    <form method="post">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        <button type="submit">Add User</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        // Database connection
        $conn = new mysqli("localhost", "root", "mydrive", "my_php_db");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert query
        $sql = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', $age)";
        if ($conn->query($sql) === TRUE) {
            echo "New user added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $conn->close();
    }
    ?>
</body>
</html>
