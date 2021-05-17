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
        <form action="../items/add" method="get">
            <input type="text" value="I have to..." onclick="this.value = '123'" name="todo"> 
            <input type="submit" value="add">
        </form>
        <br/><br/>
        <?php $number = 0 ?>

        <?php foreach ($todo as $todoitem): ?>
            <a class="big" href="../items/view/<?php echo $todoitem['Item']['id'] ?>/<?php echo strtolower(str_replace(" ", "-", $todoitem['Item']['item_name'])) ?>">
                <span class="item">
                    <?php echo ++$number ?>
                    <?php echo $todoitem['Item']['item_name'] ?>
                </span>
            </a><br/>
        <?php endforeach ?>
            <script>
                alert("hello");
            </script>
    </body>
</html>
