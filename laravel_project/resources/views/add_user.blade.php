<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
    <h2>Add a New User</h2>
    <form method="POST" action="/add-user">
        @csrf
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        <button type="submit">Add User</button>
    </form>
</body>
</html>
