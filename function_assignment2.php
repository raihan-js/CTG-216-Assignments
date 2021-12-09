<?php


//Age define Calculator
function age_cal($age)
{
    if ($age <= 30) {
        echo "Child";
    } else if ($age > 30 && $age < 60) {
        echo "Young";
    } else if ($age >= 60) {
        echo "old";
    }
}
age_cal(90);


//square, rectangle and circle area
function area_cal($a, $b, $type)
{
    if ($type === "square") {
        return  $a * $a;
    } else if ($type === "rect") {
        return $a * $b;
    } else if ($type === "circle") {
        return 3.1416 * ($a * $a);
    }
}

echo area_cal(3, 20, "circle");

//grade calculator
function grade_cal($mark)
{
    if ($mark <= 33) {
        echo "Failed";
    } else if ($mark >= 33 && $mark <= 40) {
        echo "grade B";
    } else if ($mark > 40 && $mark < 70) {
        echo "grade A";
    } else if ($mark > 70) {
        echo "grade A+";
    }
}
grade_cal(40);


//birth year calculator
function birth_cal($year)
{
    $age1 = 2021 - $year;
    return $age1;
}
echo birth_cal(1993);


//BMI (kg,meter)
function bmi($weight, $height)
{
    $index = $weight / ($height * $height);
    return $index;
}

echo bmi(60, 1.75);


//currency converter
function currency($amount, $type)
{
    $dollar = $amount * 84;
    $pound = $amount * 108;
    $euro = $amount * 95;
    if ($type === "dollar") {
        return $dollar . " BDT";
    } else if ($type === "pound") {
        return $pound . " BDT";
    } elseif ($type === "euro") {
        return $euro . " BDT";
    }
}
echo currency(10, "euro");

//Heading change
function h_change($color)
{
    $heading = "This is a heading";

    if ($color === "lal") {
        echo "<h1 style=\"color:red\">$heading</h1>";
    } else if ($color === "nil") {
        echo "<h1 style=\"color:blue\">$heading</h1>";
    } else if ($color === "holud") {
        echo "<h1 style=\"color:yellow\">$heading</h1>";
    }
}
h_change("holud");


//uppercase - lowercase
function borochoto($type)
{
    $text = "soMe teXt";
    if ($type === "boro") {
        echo "<h2 style=\"text-transform:uppercase;\">$text</h2>";
    } else if ($type === "choto") {
        echo "<h2 style=\"text-transform:lowercase;\">$text</h2>";
    }
}

borochoto("choto");

//image upload function
function resize($image, $height, $width)
{
    echo "<img src=\"$image\" alt=\"\" width=\"$width\" height=\"$height\">";
}
resize("https://picsum.photos/id/237/200/300", 300, 500);

//reverse with css function
function reverse($text)
{
    echo "<h1 style=\"unicode-bidi:bidi-override;direction:rtl;\">$text</h1>";
}
reverse("hello world");
