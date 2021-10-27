<?php
require __DIR__ . '/php/data.php';
require __DIR__ . '/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/form.css">
</head>

<body>

    <div class="container">

        <form method="POST" action="form.php" class="form">
            <div>
                <input id="strawberry" class="radio-custom" type="radio" name="ingredient" value="strawberries">
                <label for="strwberry" class="radio-custom-label">Strawberry</label>
            </div>
            <div>
                <input id="banana" class="radio-custom" type="radio" name="ingredient" value="banana">
                <label for="banana" class="radio-custom-label">Banana</label>
            </div>
            <div>
                <input id="blueberry" class="radio-custom" type="radio" name="ingredient" value="blueberry">
                <label for="blueberry" class="radio-custom-label">Blueberry</label>
            </div>
            <div>
                <input id="milk" class="radio-custom" type="radio" name="ingredient" value="milk">
                <label for="milk" class="radio-custom-label">Milk</label>
            </div>

            <input type="submit" name="" value="submit">
        </form>
    </div>

    <section class="grid">
        <?php

        if (isset($_POST["ingredient"])) {
            $filteredSmoothies = [];
            foreach ($smoothies as $smoothie) {

                $hasIngredient = in_array($_POST["ingredient"], $smoothie['ingredients']);

                if ($hasIngredient) {
                    $filteredSmoothies[] = $smoothie;

                    $name = $smoothie['name'];
                    $img = $smoothie['img'];
                    $id = $smoothie['id']; ?>


                    <a href="recipe.php?id=<?= $id; ?>" class="grid-item">
                        <li>
                            <h4><?php echo $name; ?></h4>
                        </li>
                        <li><img src="<?php echo $img; ?>" width="100%"></li>
                    </a>

            <?php  }
            }
            ?>
    </section>
<?php }
?>

</body>

</html>
