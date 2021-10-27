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
    <title>smoothie</title>
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/nav.css">
</head>

<body>
    <section class="grid">
        <?php foreach ($smoothies as $smoothie) :
            $name = $smoothie['name'];
            $img = $smoothie['img'];
            $recipe = $smoothie['recipe'];
            $id = $smoothie['id'];
        ?>


            <a href="recipe.php?id=<?= $id; ?>" class="grid-item">
                <li>
                    <h4><?php echo $name; ?></h4>
                </li>
                <li><img src="<?php echo $img; ?>" width="100%"></li>
            </a>




        <?php endforeach; ?>
    </section>


    <?php
    require __DIR__ . '/footer.php';
