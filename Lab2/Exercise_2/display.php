<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $username = $_POST["username"];
        $class = $_POST["class"];
        $university = $_POST["university"];
        $hobbies = $_POST["hobby"];;
        print"<h1 id='test'>Hello ".nl2br($username)."</h1>";
        print"<h1>You are studying at $class, $university</h1>";
        print"<h1>Your hobby is,</h1>";
        $i = 0;
        foreach ($hobbies as $v) {
            $i++;
            print "<h1>$i.$v </h1>";
        }
        ?>
    </body>
</html>
