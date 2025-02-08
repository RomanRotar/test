<?php
echo "Введите число: ";
$number = trim(fgets(STDIN));
if ($number % 2==0) {
    echo "$number - четное число.". PHP.EOL;
} else {
    echo "$number - нечетное число." . PHP.EOL; 
}
?>