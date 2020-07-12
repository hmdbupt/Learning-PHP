<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables & Data Types | PHP</title>
</head>
<body>
    <?php
        // Variable declaration
        $name = "Helena"; // Data type string
        $age = 44; // Data type integer number (whole number)
        $gender = "woman";
        $pronoun = "she";
        $score = 98.9; // Data type float or decimal number
        $isMarried = true; // Data type boolean
        /* Data type null - it can be assigned to a variable whose value we 
        don't know in the beginning */
        $dontKnow = null; 
        echo "<h1>Short Story</h1>";
        echo "<p>There once was a $gender named $name,<br>
                $pronoun was $age years old,<br>
                $pronoun really liked the name $name,<br>
                but didn't like being $age,<br>
                $pronoun was exceptionally good at math,<br>
                $pronoun had a math score of $score%,<br>
                when someone asked her if she's married,<br>
                $pronoun said in boolean $isMarried<br></p>";
    ?>           
</body>
</html>