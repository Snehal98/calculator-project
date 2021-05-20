<?php
if (isset($_POST['a']))
{
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $add = $n1+$n2;
    echo "Addition is ".$add;
}
if (isset($_POST['s']))
{
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $sub = $n1-$n2;
    echo "Subtraction is ".$sub;
}
if (isset($_POST['m']))
{
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $mul = $n1*$n2;
    echo "Multiplication is ".$mul;
}
if (isset($_POST['d']))
{
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $div = $n1/$n2;
    echo "Division is ".$div;
}

?>