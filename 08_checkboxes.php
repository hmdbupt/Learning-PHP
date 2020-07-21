<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays | PHP</title>
</head>
<body>
    <form action="08_checkboxes.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Mangoes: <input type="checkbox" name="fruits[]" value="mangoes"><br>
        Pineapples: <input type="checkbox" name="fruits[]" value="pineapples"><br>
        <input type="submit">
    </form>

    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0]; 
    ?>
</body>
</html>