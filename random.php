<?php
require __DIR__ . '/php/data.php';

require __DIR__ . '/header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/styles/style.css">
</head>

<body>

    <?php
    $recipe = $smoothies[array_rand($smoothies)];
    $name = $recipe['name'];
    $img = $recipe['img'];
    $text = $recipe['recipe'];
    $ingredients = $recipe['ingredients']

    ?>

    <section class="grid">
        <a href="#" class="grid-item">
            <li>
                <h4><?php echo $name; ?></h4>
            </li>
            <li><img src="<?php echo $img; ?>" width="100%"></li>
    </section>
    <li><?php echo $text; ?></li>
    <?php
    foreach ($ingredients as $ingredient) : ?>
        <li><?php echo $ingredient; ?></li>
    <?php endforeach
    ?>

</body>

</html>
