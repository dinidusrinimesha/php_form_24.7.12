<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>
    <h1>Registration Form</h1>

    <form action="process.php" method="post">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required> <br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required> <br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required> <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>