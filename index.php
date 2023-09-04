<?php
require_once __DIR__.'/classes/products.php';
require_once __DIR__.'/classes/data.php';
require_once __DIR__.'/classes/user.php';





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP OOP 2</title>
</head>
<body>
    <h1>Animal Commerce</h1>
    <div class="link">
        <a href="#" id="cani">Cani</a>
        <a href="#" id="garri">Gatti</a>
    </div>
    <div class="container">
        <?php
    foreach ($products as $prodotto) {
        if ($prodotto['for'] === 'dog') {
            echo '<div class="card">';
            echo '<h2>' . $prodotto['name'] . '</h2>';
            echo '<img src="' . $prodotto['image_url'] . '" alt="' . $prodotto['name'] . '">';
            echo '<p>€: ' . $prodotto['price'] . '</p>';
            echo '<p> info: '. $prodotto['weight'] . '</p>';
            echo '<p>valutazione: ' . $prodotto['vote'] . '/5</p>';
            if ($prodotto['coupon'] !== null) {
                echo '<p>sconto: ' . $prodotto['coupon'] . '</p>';
            }
            echo '</div>';
        } elseif ($prodotto['for'] === 'cat') {
            echo '<div class="card">';
            echo '<h2>' . $prodotto['name'] . '</h2>';
            echo '<img src="' . $prodotto['image_url'] . '" alt="' . $prodotto['name'] . '">';
            echo '<p>€: ' . $prodotto['price'] . '</p>';
            echo '<p>info: ' . $prodotto['weight'] . '</p>';
            echo '<p>valutazione: ' . $prodotto['vote'] . '/5</p>';
            if ($prodotto['coupon'] !== null) {
                echo '<p>sconto: ' . $prodotto['coupon'] . '</p>';
            }
            echo '</div>';
        }
    }
        ?>
</body>
</html>