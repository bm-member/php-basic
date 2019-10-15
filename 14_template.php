<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!-- condition -->
    <?php if(true): ?>

       <h1>Hello PHP</h1>
       
    <?php endif; ?>

    <!-- for loop -->
    <?php for($i=0 ; $i < 5 ; $i++): ?>

        <h1>This is for loop <?php echo $i; ?></h1>

    <?php endfor; ?>

    <!-- while loop -->
    <?php $i = 0; while($i < 5): ?>

    <h1>This is while loop <?php echo $i; ?></h1>

    <?php $i++; endwhile; ?>

    <!-- foreach -->
    <?php
        $arr = ['a', 'b', 'c'];
        foreach($arr as $a):
    ?>

    <p><?php echo $a; ?></p>

    <?php endforeach; ?>
</body>
</html>