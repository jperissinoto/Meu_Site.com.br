<?php
$num = $_POST['num'];
function parOuímpar($num) {
    if ($num % 2 == 0) {
        return  "Par";
    } else {
        return "Ímpar";
    }
}
echo parOuímpar($num);
?>