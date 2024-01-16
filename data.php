<?php

require __DIR__ ."/Models/Product.php";

$categories = [
    $animalsProduct = new Category(
        "Prodotti per animali",
        "https://static.vecteezy.com/system/resources/previews/025/268/369/non_2x/dog-food-seamless-pattern-bones-food-bowls-pets-background-for-pet-shop-websites-and-prints-social-media-posts-animal-product-design-cartoon-illustration-vector.jpg",
        "Prodotti per la cura degli animali domestici."
    ),

    $homeProduct = new Category(
        "Prodotti per la casa",
        "https://iconspng.com/uploads/kitchenutensilscrockeryseamlesspattern/kitchenutensilscrockeryseamlesspattern.png",
        "Prodotti per la cura della casa."
    )
];

$products = [
    new Product(
        $animalsProduct,
        'https://www.giramico.it/wp-content/uploads/2014/06/HP-MINI-pesce-mockup-sito-nobackground.png', 
        'Crocchette per cani', 
        'Crocchette per cani molto buone. Per 10 kg di cane.',
        10.99
    ),
    
    new Product(
        $animalsProduct,
        'https://static.wixstatic.com/media/40eb25_4be89889e63f49899783ed9af86a3750~mv2.png/v1/fit/w_500,h_500,q_90/file.png', 
        'Mangime per tartarughe', 
        'Mangime per tartarughe di acqua dolce. Contiene 250g di prodotto.',
        4.99
    ),

    new Product(
        $animalsProduct,
        'https://cdn.reddingo.com/assets/product/overview/CC-DC-PK.png', 
        'Collare per gatti', 
        'Collare per gatti resistente in microfibra. Dotato di campanellino e targhetta.',
        14.99
    ),

    new Product(
        $animalsProduct,
        'https://www.morsoworld.com/wp-content/uploads/2023/03/pettorina_mini-regolabile_lipstick_header_01.png', 
        'Pettorina', 
        'Pettorina in materiale elastico. Per cani e gatti.',
        17.99
    ),

    new Product(
        $homeProduct,
        'https://content.dambros.it/uploads/2023/03/20093818/0000217782.png',
        'Detersivo per piatti',
        'Detersivo per piatti al gusto limone. Sgrassante e igienizzante.',
        2.99
    ),

    new Product(
        $homeProduct,
        'https://www.sagigroup.com/wp-content/uploads/2020/02/a75-015dcdeomatic_notedipulito_diff.png',
        'Deodorante per ambienti',
        'Deodorante per ambienti al gurto di cannella. Perfetto per la notte.',
        9.99
    ),

    new Product(
        $homeProduct,
        'https://www.midea.com/content/dam/midea-aem/my/vacuum-cleaners/robotics/4000pa--mvc-s8-/Midae_S8_EN_1500X1500_02.png',
        'Robot aspirapolvere',
        'Robot aspirapolvere in grado di pulire fino a 250 metri quadri. Dotato di connessione wifi',
        349.99
    ),

    new Product(
        $homeProduct,
        'https://www.detergenzaprofessionaleonline.it/wp-content/uploads/R46-GUANTO.png',
        'Guanti in lattice',
        'Guanti in lattice per l\'uso casalingo. Confezione da 50pz',
        3.99
    )
];