<?php
require __DIR__ . '/data.php';
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
    <?php foreach ($smoothies as $smoothie) :
        $name = $smoothie['name'];
        $img = $smoothie['img'];
        $recipe = $smoothie['recipe'];
    ?>

        <section class="grid">

            <a href="recipe.php?id=2" class="grid-item">
                <li>
                    <h3><?php echo $name; ?></h3>
                </li>
                <li><img src="<?php echo $img; ?>" width="100%"></li>
            </a>
        </section>




    <?php endforeach; ?>


</body>

</html>
