<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SquareCube</title>
    </head>
    <body><font size="5" color="blue">
        Generate Square and Cube Values
        </font>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <?php
            if (array_key_exists("start", $_GET)) {
                $start = $_GET["start"];
                $end = $_GET["end"];
            } else {
                $start = 0;
                $end = 0;
            }
            ?>
            <table>
                <tr>
                    <td>Select Start Number: </td>
                    <td><select name="start">
                            <?php
                            for ($i = 0; $i <= 10; $i++) {
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Select End Number: </td>
                    <td><select name="end">
                            <?php
                            for ($i = 0; $i <= 20; $i++) {
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right"><input type="submit" value="Submit"></td>
                    <td align="left"><input type="reset" value="Reset"></td>
                </tr>
            </table>
            <table>
                <?php
                if (array_key_exists("start", $_GET)) {
                    $i = $start;
                    print(" <tr><td>Number</td><td>Square</td><td>Cube</td></tr>");
                    while ($i <= $end) {
                        $square = $i * $i;
                        $cubed = $square * $i;
                        print("<tr><td>$i</td><td>$square</td><td>$cubed</td></tr>");
                        $i++;
                    }
                }
                ?>
            </table>
        </form>
    </body>
</html>
