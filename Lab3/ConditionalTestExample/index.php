<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>A Simple Form</title>
    </head>
    <body>
        <form action="ConditionalTest.php" method="GET">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" size="10" maxlength="15" name="firstName"></td>
                </tr>
                <tr>
                    <td>Middle Name:</td>
                    <td><input type="text" size="10" maxlength="15" name="middleName"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" size="10" maxlength="15" name="lastName"></td>
                </tr>
                <tr>
                    <td>Enter Mid-term Score:</td>
                    <td><input type="text" size="4" maxlength="7" name="grade1"></td>
                </tr>
                <tr>
                    <td>Enter Final-exam Score:</td>
                    <td><input type="text" size="4" maxlength="7" name="grade2"></td>
                </tr>
                <tr>
                    <td align="right"><input type="submit" value="Submit"></td>
                    <td alihn="left"><input type="reset" value="Reset" ></td>
                </tr>
            </table>
        </form>
    </body>
</html>
