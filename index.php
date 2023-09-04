<?php
require_once __DIR__.'/classes/products.php';



$products = [
    [
        'name' => '12 kg + 2 kg gratis! 14 kg Wolf of Wilderness Crocchette per cani',
        'image_url'=>'https://shop-cdn-m.mediazs.com/bilder/kg/kg/gratis/kg/wolf/of/wilderness/crocchette/per/cani/2/800/12_kg_2_kg_gratis_14_kg_wolf_of_wilderness_crocchette_per_cani_x_000x1000_it_2.jpg',
        'price' => '72,99',
        'weight' => '14 kg',
        'vote' => '4',
        'coupon' => null,
        'typeProduct' => 'cibo',
        'for' => 'dog',
    ],
    [
        'name' => 'Cuccia per cani Spike Comfort',
        'image_url'=>'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/comfort/9/800/icon_topseller_1_57__9.jpg',
        'price' => '76,99',
        'weight' => 'P 72 x L 76 x H 76 cm',
        'vote' => '4',
        'coupon' => '-5%',
        'typeProduct' => 'cucce',
        'for' => 'dog',
    ],
    [
        'name' => '12 kg + 2 kg gratis! 14 kg Wolf of Wilderness Crocchette per cani',
        'image_url'=>'https://shop-cdn-m.mediazs.com/bilder/kg/kg/gratis/kg/wolf/of/wilderness/crocchette/per/cani/2/800/12_kg_2_kg_gratis_14_kg_wolf_of_wilderness_crocchette_per_cani_x_000x1000_it_2.jpg',
        'price' => '72,99',
        'weight' => '14',
        'vote' => '4',
        'coupon' => null,
        'typeProduct' => 'cibo',
        'for' => 'dog',
    ],
    [
        'name' => '12 kg + 2 kg gratis! 14 kg Wolf of Wilderness Crocchette per cani',
        'image_url'=>'https://shop-cdn-m.mediazs.com/bilder/kg/kg/gratis/kg/wolf/of/wilderness/crocchette/per/cani/2/800/12_kg_2_kg_gratis_14_kg_wolf_of_wilderness_crocchette_per_cani_x_000x1000_it_2.jpg',
        'price' => '72,99',
        'weight' => '14',
        'vote' => '4',
        'coupon' => null,
        'typeProduct' => 'cibo',
        'for' => 'dog',
    ],
    [
        'name' => '12 kg + 2 kg gratis! 14 kg Wolf of Wilderness Crocchette per cani',
        'image_url'=>'https://shop-cdn-m.mediazs.com/bilder/kg/kg/gratis/kg/wolf/of/wilderness/crocchette/per/cani/2/800/12_kg_2_kg_gratis_14_kg_wolf_of_wilderness_crocchette_per_cani_x_000x1000_it_2.jpg',
        'price' => '72,99',
        'weight' => '14',
        'vote' => '4',
        'coupon' => null,
        'typeProduct' => 'cibo',
        'for' => 'dog',
    ],
    [
        'name' => '12 kg + 2 kg gratis! 14 kg Wolf of Wilderness Crocchette per cani',
        'image_url'=>'https://shop-cdn-m.mediazs.com/bilder/kg/kg/gratis/kg/wolf/of/wilderness/crocchette/per/cani/2/800/12_kg_2_kg_gratis_14_kg_wolf_of_wilderness_crocchette_per_cani_x_000x1000_it_2.jpg',
        'price' => '72,99',
        'weight' => '14',
        'vote' => '4',
        'coupon' => null,
        'typeProduct' => 'cibo',
        'for' => 'dog',
    ],
    [
        'name' => '12 kg + 2 kg gratis! 14 kg Wolf of Wilderness Crocchette per cani',
        'image_url'=>'https://shop-cdn-m.mediazs.com/bilder/kg/kg/gratis/kg/wolf/of/wilderness/crocchette/per/cani/2/800/12_kg_2_kg_gratis_14_kg_wolf_of_wilderness_crocchette_per_cani_x_000x1000_it_2.jpg',
        'price' => '72,99',
        'weight' => '14',
        'vote' => '4',
        'coupon' => null,
        'typeProduct' => 'cibo',
        'for' => 'dog',
    ],
    [
        'name' => '12 kg + 2 kg gratis! 14 kg Wolf of Wilderness Crocchette per cani',
        'image_url'=>'https://shop-cdn-m.mediazs.com/bilder/kg/kg/gratis/kg/wolf/of/wilderness/crocchette/per/cani/2/800/12_kg_2_kg_gratis_14_kg_wolf_of_wilderness_crocchette_per_cani_x_000x1000_it_2.jpg',
        'price' => '72,99',
        'weight' => '14',
        'vote' => '4',
        'coupon' => null,
        'typeProduct' => 'cibo',
        'for' => 'dog',
    ],
];
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
            echo '<p>'. $prodotto['weight'] . '</p>';
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
            echo '<p>kg: ' . $prodotto['weight'] . '</p>';
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