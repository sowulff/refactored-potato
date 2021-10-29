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
    <link rel="stylesheet" href="styles/recipe.css">
</head>

<body>
    <section class="section-recipe">

        <?php
        $recipe = $smoothies[array_rand($smoothies)];
        $name = $recipe['name'];
        $img = $recipe['img'];
        $text = $recipe['recipe'];
        $ingredients = $recipe['ingredients']

        ?>



        <a href="#" class="grid-item">
            <li>
                <h4><?php echo $name; ?></h4>
            </li>
            <li class="photo"><img src="<?php echo $img; ?>" width="100%"></li>


        </a>
        <div class="ingredients-box">
            <li>
                <h4>This is what you need:</h4>
            </li>
            <?php foreach ($ingredients as $ingredient) : ?>
                <li class="ingredients"><?= $ingredient; ?></li>
            <?php endforeach; ?>
        </div>
        <div class="recipe-box">
            <li>
                <h4>Let's get started!</h4>
            </li>
            <li class="recipe"><?php echo $text; ?></li>
        </div>


    </section>

</body>

</html>
