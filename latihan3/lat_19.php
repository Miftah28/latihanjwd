<?php

$nilaimhs = 85;

if ($nilaimhs >= 80 && $nilaimhs <=100)
{
$grade = "A";
}

elseif ($nilaimhs >= 60 && $nilaimhs <= 79)
{
$grade = "B";
}

elseif ($nilaimhs >= 40 && $nilaimhs <= 59)
{
$grade = "C";
}

elseif ($nilaimhs >= 20 && $nilaimhs <= 39)
{
$grade = "D";
}


switch ($grade)
{
case "A" :
    echo "Nilai: $nilaimhs<br>";
    echo "Grade: $grade<br>";
    echo "Lulus";
break;
case "B" :
    echo "Nilai: $nilaimhs<br>";
    echo "Grade: $grade<br>";
    echo "Lulus";
break;
case "C" :
    echo "Nilai: $nilaimhs<br>";
    echo "Grade: $grade<br>";
    echo "Lulus";
break;
case "D" :
    echo "Nilai: $nilaimhs<br>";
    echo "Grade: $grade<br>";
    echo "Lulus";
break;
default :
    echo "Nilai: $nilaimhs<br>";
    echo "Kamu Tidak Lulus";
break;
}

?>