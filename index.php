<?php

include_once __DIR__ . '/classi/accessory.php';
include_once __DIR__ . '/classi/toy.php';
include_once __DIR__ . '/classi/food.php';
include_once __DIR__ . '/classi/category.php';

$categories = [
    'gatto' => new Category('Gatto', '<i class="fa-solid fa-cat"></i>'),
    'cane' => new Category('Cane', '<i class="fa-solid fa-dog"></i>'),
    'pesce' => new Category('Pesce', '<i class="fa-solid fa-fish"></i>'),
    'uccello' => new Category('Uccello', '<i class="fa-solid fa-dove"></i>'),
];

$products = [
    new Food('Royal Canin', 43.99, 'https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/royal/canin/puppy/royal/canin/adult/9/140/1_icon_percent_template_1000x1000_int_4_20__9.jpg', true, $categories['cane'], "545g", 'prosciutto'),
    new Food('Almo Nature', 44.99, 'https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/pollo/fresco/1/140/26708_pla_almo_nature_holistic_adult_huhn_reis_medium_744_12kg_dog_1.jpg', true, $categories['cane'], "600g", 'manzo'),
    new Accessory('Voliera Ferplast Bella Casa', 184.99, 'https://shop-cdn-m.mediazs.com/bilder/voliera/ferplast/bella/casa/2/140/71860_pla_vogelvoliere_bellacasa_back_2.jpg', true, $categories['uccello'], 'Legno', 'M: L 83 x P 67 x H 153 cm'),
    new Toy('Topini di peluche Trixie', 4.99, 'https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/7/140/42535_pla_trixie_plueschmaus_grau_und_weiss_ret_01_7.jpg', true, $categories['gatto'], 'Morbido con codina in corda', '8,5 cm x 10 cm'),
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>Pet Shop</h1>

    <div class="container">
        <div class="row">
            <?php foreach ($products as $elem) { ?>
                <div class="col-4 g-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $elem->image ?>" class="card-img-top" alt="<?php echo $elem->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $elem->name ?></h5>
                            <div>
                                <span>
                                    <?php echo $elem->category->icon ?>
                                </span>
                                <span>
                                    <?php echo $elem->category->name ?>
                                </span>
                            </div>
                            <div>
                                <span>
                                    Prezzo: <?php echo $elem->price ?>
                                </span>
                            </div>
                            <?php if (get_class($elem) == 'Food') { ?>
                                <p>Peso netto: <?php echo $elem->weight ?></p>
                            <?php } else if (get_class($elem) == 'Toy') { ?>
                                <p>Caratteristiche: <?php echo $elem->features ?></p>
                            <?php } else { ?>
                                <p>Materiale: <?php echo $elem->material ?></p>
                            <?php } ?>

                            <?php if (get_class($elem) == 'Food') { ?>
                                <p>Ingredienti: <?php echo $elem->ingredients ?></p>
                            <?php } else { ?>
                                <p>Dimensioni: <?php echo $elem->size ?></p>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            <?php } ?>


        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="jscript/main.js"></script>
</body>

</html>