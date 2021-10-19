<?php
require __DIR__ . '/data.php';
require __DIR__ . '/header.php';

// https://stackoverflow.com/questions/1019076/how-to-search-by-key-value-in-a-multidimensional-array-in-php
function search($array, $key, $value)
{
    $results = array();

    if (is_array($array)) {
        if (isset($array[$key]) && $array[$key] == $value) {
            $results = $array;
        }

        foreach ($array as $subarray) {
            $results = array_merge($results, search($subarray, $key, $value));
        }
    }

    return $results;
}

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
    <?php
    $id = $_GET['id'];
    $recipe = search($smoothies, "id", $id);
    $name = $recipe['name'];
    $img = $recipe['img'];
    $recipe = $recipe['recipe'];
    ?>
    <div>
        <ul class="recipe">
            <li class="item">
                <h3><?php echo $name; ?></h3>
            </li>
            <li class="item"><img src="<?php echo $img; ?>" width="100%"></li>
            <li class="item"><?php echo $recipe; ?></li>
        </ul>
    </div>

    <?php

    if (empty($recipe)) {
        echo 'empty';
    }
    ?>
</body>

</html>
