<?php
$names=['raju','john', 'ramya', 'kavya'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .some-names{
            background-color: peru;
            color: white;
        }
        .more-names{
            background-color: blueviolet;
        }
    </style>
   </head>
   <body class="">
    <h1>Names</h1>
    <ul class="<?= count($names)> 3 ? 'more-names' : 'some-names' ?>">
        <?php foreach($names as $name){?>
            <li><?=$name ?></li>
            <?php }  ?>

        
    </ul>


</body>
</html>