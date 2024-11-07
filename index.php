<?php declare(strict_types=1);
include 'includes/class-autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/calc.inc.php" method="POST">
        <p>Calcu</p>
         <input type="number" name="num1" placeholder="1st no">
         <select name="oper">
            <option value="add">Add</option>
            <option value="subtract">Sub</option>
            <option value="multiply">Mult</option>
            <option value="divide">Div</option>
         </select>
         <input type="number" name="num2" placeholder="2nd no">
         <button type="submit" name="calc-submit">Calculate</button>
    </form>
</body>
</html>