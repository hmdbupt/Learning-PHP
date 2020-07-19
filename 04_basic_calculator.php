<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator | PHP</title>
</head>
<body>
    <form action="04_basic_calculator.php" method="get">
        <input type="text" name="num1">
        <br>
        <input type="text" name="num2">
        <br>
        <input type="submit">
    </form>

    Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>
</body>
</html>