<!DOCTYPE html>
<html>
<head>
    <title>Operators Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #333;
        }

        p {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <h2>Arithmetic Operators</h2>
    <?php
    $number1 = 10;
    $number2 = 5;

    $sum = $number1 + $number2;
    $difference = $number1 - $number2;
    $product = $number1 * $number2;
    $division = $number1 / $number2;
    $remainder = $number1 % $number2;

    echo "<p>Number 1 = $number1</p>";
    echo "<p>Number 2 = $number2</p>";
    echo "<p>Sum : $number1 +  $number2 = $sum</p>";
    echo "<p>Difference: $number1 -  $number2 = $difference</p>";
    echo "<p>Product:  $number1 *  $number2 = $product</p>";
    echo "<p>Division:  $number1 /  $number2 = $division</p>";
    echo "<p>Remainder:  $number1 %  $number2 = $remainder</p>";
    ?>

    <h2>Comparison Operators</h2>
    <?php
    $greaterThan = ($number1 > $number2);
    $lessThan = ($number1 < $number2);
    $equalTo = ($number1 == $number2);
    $notEqualTo = ($number1 != $number2);

    echo "<p>Is  $number1 greater than  $number2? = " . ($greaterThan ? 'Yes' : 'No') . "</p>";
    echo "<p>Is  $number1 less than  $number2?  =" . ($lessThan ? 'Yes' : 'No') . "</p>";
    echo "<p>Is  $number1 equal to  $number2? = " . ($equalTo ? 'Yes' : 'No') . "</p>";
    echo "<p>Are  $number1 and  $number2 not equal? = " . ($notEqualTo ? 'Yes' : 'No') . "</p>";
    ?>

    <h2>Logical Operators</h2>
    <?php
    $andOperator = ($greaterThan && $lessThan);
    $orOperator = ($greaterThan || $lessThan);
    $notOperator = !$equalTo;

    echo "<p>Is  $number1 greater than  $number2 AND less than Number 2? = " . ($andOperator ? 'Yes' : 'No') . "</p>";
    echo "<p>Is  $number1 greater than  $number2 OR less than Number 2?  =" . ($orOperator ? 'Yes' : 'No') . "</p>";
    echo "<p>Is  $number1 NOT equal to  $number2?  =" . ($notOperator ? 'Yes' : 'No') . "</p>";
    ?>
</body>
</html>
