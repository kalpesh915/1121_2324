<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            PHP Floats
            A float is a number with a decimal point or a number in exponential form. 2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats. The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.
            PHP has the following predefined constants for floats (from PHP 7.2):

            PHP_FLOAT_MAX - The largest representable floating point number
            PHP_FLOAT_MIN - The smallest representable positive floating point number
            PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
            PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0

        */
        
        echo "<hr>".PHP_FLOAT_MAX;
        echo "<hr>".PHP_FLOAT_MIN;
        echo "<hr>".PHP_FLOAT_DIG;
        echo "<hr>".PHP_FLOAT_EPSILON;
    ?>
</body>
</html>