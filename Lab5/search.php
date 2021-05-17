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
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <h1 style="color:blue">Products Data</h1>
        <b>The query is Select * from Products</b>
        <?php $number = 0 ?>
        <table style="width: 100%">
            <tr>
                <td>Num</td>
                <td>Product</td>
                <td>Cost</td>
                <td>Weight</td>
                <td>Count</td>
            </tr>
            <?php foreach ($products as $item): ?>
                <tr>
                    <td><?php echo ++$number ?></td>
                    <td><?php echo $item['Product_desc'] ?></td>
                    <td><?php echo $item['Cost'] ?></td>
                    <td><?php echo $item['Weight'] ?></td>
                    <td><?php echo $item['Numb'] ?></td>
                </tr>   
            <?php endforeach ?>

        </table>
    </body>
</html>
