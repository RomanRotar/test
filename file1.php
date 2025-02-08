<?php
echo "Введите число: ";
$number = trim(fgets(STDIN));
if ($number % 2==0) {
    echo "$number - четное число.";
} else {
    echo "$number - нечетное число." ;
}
?>