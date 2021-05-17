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
        $nameItem = $_POST["nameItem"];
        $weight = $_POST["weight"];
        $cost = $_POST["cost"];
        $numberAvailable = $_POST["numberAvailable"];

        echo 'The a is INSERT INTO Products VALUES (\''. $nameItem.'\',\''.$weight.'\',\''.$cost.'\',\''.$numberAvailable.'\')<br />';
        echo 'Insert into perl_pgm_com was successful !';
        ?>
    </body>
</html>
