<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conditional Test</title>
    </head>
    <body>
        <?php
        $first = $_GET["firstName"];
        $middle = $_GET["middleName"];
        $last = $_GET["lastName"];
        print("Hi $first!You full name is $last $middle $first.<br>");
        if ($first == $last) {
            print("$first and $last are equal");
        } elseif ($first < $last) {
            print("$first less than $last");
        } elseif ($first > $last) {
            print("$first greater $last");
        }
        print("<br>");
        $gradel = $_GET["grade1"];
        $grade2 = $_GET["grade2"];
        $final = ($gradel * 2 + 3 * $grade2) / 5;
        if ($final * 10 > 89) {
            print("Your final grade is $final.You got an A. Congratulation!");
            $rate = "A";
        } elseif ($final * 10 > 79) {
            print("Your final grade is $final.You got an B. Congratulation!");
            $rate = "B";
        } elseif ($final * 10 > 69) {
            print("Your final grade is $final.You got an C. Congratulation!");
            $rate = "C";
        } elseif ($final * 10 > 59) {
            print("Your final grade is $final.You got an D. Congratulation!");
            $rate = "D";
        } elseif ($final * 10 > 0) {
            print("Your final grade is $final.You got an F. Congratulation!");
            $rate = "F";
        } else {
            print("Illegal grade less than 0.Final grade=$final");
            $rate = "Illegal";
        }
        print("<br>");
        switch ($rate) {
            case "A":print("Excellent!");
                break;
            case "B":print("Good!");
                break;
            case "C":print("Not Bad!");
                break;
            case "D":print("Normal!");
                break;
            case "F":print("You have to try again!");
                break;
            default : print("Illegal grade!");
        }
        ?>
    </body>
</html>
