<?php
require __DIR__ . '/php/data.php';
require __DIR__ . '/header.php';



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="styles/recipe.css">
</head>

<body>
    <section class="grid">
        <?php
        // https://stackoverflow.com/questions/1019076/how-to-search-by-key-value-in-a-multidimensional-array-in-php
        function search($smoothies, $key, $value)
        {
            $results = array();

            if (is_array($smoothies)) {
                if (isset($smoothies[$key]) && $smoothies[$key] == $value) {
                    $results = $smoothies;
                }

                foreach ($smoothies as $smoothie) {
                    $results = array_merge($results, search($smoothie, $key, $value));
                }
            }

            return $results;
        }

        $id = $_GET['id'];
        $recipe = search($smoothies, "id", $id);
        $name = $recipe['name'];
        $img = $recipe['img'];
        $text = $recipe['recipe'];
        $ingredients = $recipe['ingredients'];
        ?>

        <a href="#" class="grid-item">
            <li>
                <h4><?php echo $name; ?></h4>
            </li>
            <li><img src="<?php echo $img; ?>" width="100%"></li>


        </a>
        <div>
            <li><?php echo $text; ?></li>

            <?php foreach ($ingredients as $ingredient) : ?>
                <li><?= $ingredient; ?></li>
            <?php endforeach; ?>
        </div>

    </section>


    <?php

    if (empty($recipe)) {
        echo 'empty';
    }
    ?>
</body>

</html>
