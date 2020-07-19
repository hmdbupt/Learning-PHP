<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input | PHP</title>
</head>
<body>
    <form action="03_user_input.php" method="get">
        Name: <input type="text" name="name">
        <br>
        Age: <input type="text" name="age">
        <br>
        <input type="submit">
    </form>
    <br>
    Your name is <?php echo $_GET["name"]?>
    <br>
    Your age is <?php echo $_GET["age"]?>
</body>
</html>