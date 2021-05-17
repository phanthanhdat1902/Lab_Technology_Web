<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercise 3</title>
    </head>
    <body>
        <h1>Enter your name and select date and time for the appointment</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <table>
                <tr>
                    <td>Your name:</td>
                    <td><input type="text" size="10" maxlength="15" name="name"></td>
                </tr>
                <tr>
                    <td>Date: </td>
                    <td><select id="day" name="day" onchange="checkYear()">
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                        <select id="month" name="month" onchange="checkYear()">
                            <?php
                            for ($i = 1; $i <= 12; $i++) {
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                        <select id="year" name="year" onchange="checkYear()">
                            <?php
                            for ($i = 1999; $i <= 2020; $i++) {
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Time: </td>
                    <td><select name="hour">
                            <?php
                            for ($i = 0; $i <= 23; $i++) {
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                        <select name="min">
                            <?php
                            for ($i = 0; $i <= 59; $i++) {
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                        <select name="second">
                            <?php
                            for ($i = 0; $i <= 59; $i++) {
                                print("<option>$i</option>");
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right"><input type="submit" value="Submit"></td>
                    <td align="left"><input type="reset" value="Reset"></td>
                <input type="hidden" id="typeMonth" name="typeMonth" value="31">
                </tr>
            </table>
            <?php
            if (array_key_exists("day", $_GET)) {
                $name = $_GET["name"];
                $day = $_GET["day"];
                $month = $_GET["month"];
                $year = $_GET["year"];
                $second = $_GET["second"];
                $min = $_GET["min"];
                $hour = $_GET["hour"];
                $typeMonth = $_GET["typeMonth"];
                print("Hi $name!<br>");
                print("You have choose to have an appointment on $hour:$min:$second,$day/$month/$year<br>");
                print("More information<br>");
                if ($hour > 12) {
                    $hour = ((int) $hour) % 12;
                }
                print("In 12 hours, the time and date is $hour:$min:$second PM,$day/$month/$year<br>");
                print("This month has $typeMonth days!");
            }
            ?>
        </form>
        <script src="checkEvent.js" type="text/javascript"></script>
    </body>
</html>
