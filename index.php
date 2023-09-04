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
        'name' => 'Gioco per cani TIAKI palla meteorite',
        'image_url'=>'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/tiaki/palla/meteorite/5/800/307696_pla_leckerli_ball_meteorit_fg_4797_5.jpg',
        'price' => '5,99',
        'weight' => '10 cm',
        'vote' => '5',
        'coupon' => '25%',
        'typeProduct' => 'toys',
        'for' => 'dog',
    ],
    [
        'name' => 'Mantella per cani Illume Nite Neon',
        'image_url'=>'https://shop-cdn-m.mediazs.com/bilder/mantella/per/cani/illume/nite/neon/6/800/2_top_seller_1000x1000_3__6.jpg',
        'price' => '11,99',
        'weight' => '30 cm lungh. dorso',
        'vote' => '5',
        'coupon' => '30%',
        'typeProduct' => 'chlotes',
        'for' => 'dog',
    ],
    [
        'name' => 'Prezzo speciale! 6 x 400 / 410 g Set prova Feringa Classic & Single Meat',
        'image_url'=>'https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/x/g/set/prova/feringa/classic/single/meat/1/800/icon_birthday_campaign_x__1000x1000_it_40__1.jpg',
        'price' => '11,75',
        'weight' => '6 x 400 g',
        'vote' => '5',
        'coupon' => null,
        'typeProduct' => 'cibo',
        'for' => 'cat',
    ],
    [
        'name' => 'Multipack Risparmio! 2 x 12 kg Lettiera Tigerino Canada Style/Special Edition / Premium',
        'image_url'=>'https://shop-cdn-m.mediazs.com/bilder/multipack/risparmio/x/kg/lettiera/tigerino/canada/stylespecial/edition/premium/4/800/icon_percent_template_1000x1000_int_4_2023_04_06t130738_775_4.jpg',
        'price' => '27,98',
        'weight' => '24 kg',
        'vote' => '5',
        'coupon' => null,
        'typeProduct' => 'lettiera',
        'for' => 'cat',
    ],
    [
        'name' => 'zoolove Tunnel con cuscino',
        'image_url'=>'https://shop-cdn-m.mediazs.com/bilder/zoolove/tunnel/con/cuscino/7/800/448869_zl_7.jpg',
        'price' => '24,99',
        'weight' => 'L 116 x P 54 x H 26 cm',
        'vote' => '5',
        'coupon' => '25%',
        'typeProduct' => 'cucce',
        'for' => 'cat',
    ],
    [
        'name' => 'Trasportino Trixie Tinos',
        'image_url'=>'https://shop-cdn-m.mediazs.com/bilder/trasportino/trixie/tinos/0/800/72380_pla_trixie_tinos_02_0.jpg',
        'price' => '22,99',
        'weight' => 'L 50 x P 35 x H 32 cm',
        'vote' => '3',
        'coupon' => '15%',
        'typeProduct' => 'trasportini',
        'for' => 'cat',
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