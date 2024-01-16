<?php

require __DIR__ ."/Models/Product.php";

$categories = [
    $food = new Category(
        "Cibo",
        "https://static.vecteezy.com/system/resources/previews/025/268/369/non_2x/dog-food-seamless-pattern-bones-food-bowls-pets-background-for-pet-shop-websites-and-prints-social-media-posts-animal-product-design-cartoon-illustration-vector.jpg",
        "Cibo per tutti gli animali domestici"
    ),

    $accessories = new Category(
        "Accessori",
        "https://previews.123rf.com/images/amalga/amalga1502/amalga150200047/36801893-seamless-pattern-con-accessori-per-cani-vector-cartoon-sfondo.jpg",
        "Accessori per tutti gli animali domestici."
    )
];

$products = [
    new Product(
        $food,
        'https://www.giramico.it/wp-content/uploads/2014/06/HP-MINI-pesce-mockup-sito-nobackground.png', 
        'Crocchette per cani', 
        'Crocchette per cani molto buone. Per 10 kg di cane.',
        10.99
    ),
    
    new Product(
        $food,
        'https://static.wixstatic.com/media/40eb25_4be89889e63f49899783ed9af86a3750~mv2.png/v1/fit/w_500,h_500,q_90/file.png', 
        'Mangime per tartarughe', 
        'Mangime per tartarughe di acqua dolce. Contiene 250g di prodotto.',
        4.99
    ),

    new Product(
        $food,
        'https://www.kaytee.com/-/media/Project/OneWeb/Kaytee/US/all-products/wild-bird/woodlands-wild-bird/10lb/03013_Woodlands_10lb-png.png', 
        'Mangime per uccelli', 
        'Mangime adatto a uccelli di piccole dimensioni. Contiene 250g di prodotto.',
        5.99
    ),

    new Product(
        $food,
        'https://revealpetfood.com/wp-content/uploads/2023/01/1.-Optimised-Image-Transparent-Background-e1677118541269.png', 
        'Crocchette per gatti', 
        'Crocchette per gatti al gusto di pollo. Per gatti fino a 10 kg.',
        8.99
    ),

    new Product(
        $accessories,
        'https://cdn11.bigcommerce.com/s-ucjiusw7rc/images/stencil/original/products/233/466/47143_BonoFido_SoftCrate_Front__79892.1563279285.png?c=2',
        'Cuccia per cani',
        'Detersivo per piatti al gusto limone. Sgrassante e igienizzante.',
        2.99
    ),

    new Product(
        $accessories,
        'https://www.arkvetofliberty.com/wp-content/uploads/2017/09/litter-box-solutions.png',
        'Lettiera per gatti',
        'Deodorante per ambienti al gurto di cannella. Perfetto per la notte.',
        9.99
    ),

    new Product(
        $accessories,
        'https://www.freeiconspng.com/uploads/red-leather-dog-collar-belt-images-1.png',
        'Collare',
        'Collare per gatti e cani di piccola taglia in microfibra.',
        9.99
    ),

    new Product(
        $accessories,
        'https://pawshtails.com/wp-content/uploads/2022/05/red-harn2.png',
        'Pettorina',
        'Pettorina per gatti e cani di piccola taglia in microfibra.',
        11.99
    )
];