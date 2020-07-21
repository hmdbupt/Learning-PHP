<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs Game | PHP</title>
</head>
<body>
    <form action="06_url_parameters.php" type="text" method="post">
        Color: <input type="text" name="color"><br>
        Plural Noun: <input type="text" name="plural_noun"><br>
        Celebrity: <input type="text" name="celebrity"><br>
        <input type="submit"><br>
    </form>
    <?php 
        $color = $_POST["color"];
        $plural_noun = $_POST["plural_noun"];
        $celebrity = $_POST["celebrity"];
        echo "Rose are $color<br>";
        echo "$plural_noun are blue<br>";
        echo "I love $celebrity<br>";
    ?>
</body>
</html>