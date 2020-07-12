<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions | PHP</title>
</head>
<body>
    <?php 
        $php = "PHP";
        echo strtolower($php); // changs the string to lowercase
        echo "<br>";
        echo strtoupper($php); // changes the string to uppercase
        echo "<br>";
        echo strlen($php); // outputs the total length of characters in the string
        echo "<br>";
        echo $php[1]; // outputs a character at the given index position of string
        echo "<br>";
        $php[0] = "B"; // assigns B to index 0 of string
        $php[2] = "B"; 
        echo "$php";
        echo "<br>";
        echo str_replace("B", "P", $php); // replaces B with P
        echo "<br>";
        $php = "Welcome to PHP<br>";
        echo substr($php, 8); // Prints out everything after the index 8 of string
        echo substr($php, 0, 7); // Prints out everything from index 0 till 7 characters
    ?>  
</body>
</html>