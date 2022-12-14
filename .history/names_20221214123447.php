<?php
$names = ['sowmya','havish','ramya','pavana'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .some-names {
            background-color: aqua;
            color: chartreuse;
        }
        ".more-names"></div>
</head>
<body class="">
    <h1>Names</h1>
        <ul>
            <?php foreach($names as $names) { ?>
                <li><?= $names ?></li>
                <?php }?>

            
        </ul>
    
    
</body>
</html>