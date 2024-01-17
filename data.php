<?php

require __DIR__ . "/Models/Product.php";
require __DIR__ . "/Models/Cart.php";

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
    ),

    $healthcare = new Category(
        "Prodotti per la cura",
        "https://thumbs.dreamstime.com/b/cute-vet-seamless-pattern-hand-drawn-background-pet-faces-veterinary-equipment-207731041.jpg",
        "Prodotti per la cura di tutti gli animali domestici"
    ),

    $toys = new Category(
        "Giochi",
        "https://images.vexels.com/content/208003/preview/dog-toys-pattern-design-89b8c8.png",
        "Giochi per tutti gli animali domestici"
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
    ),

    new Product(
        $healthcare,
        'https://i.ebayimg.com/images/g/VKMAAOSwEXZeY1wz/s-l1200.webp',
        'Spazzola per animali',
        'Spazzola per cani e gatti indossabile. Rimuove tutto il pelo in eccesso con facilità.',
        7.99
    ),

    new Product(
        $healthcare,
        'https://www.yagos.it/11584/Collare-antipulci-e-zecche-Seresto-per-cani-da-8kg.jpg',
        'Collare antipulci per cani',
        'Collare antipulci per cani più pesanti di 8 kg. Offre una protezione di 7-8 mesi.',
        39.49
    ),

    new Product(
        $healthcare,
        'https://canatura.s25.cdn-upgates.com/_cache/3/e/3e2b9afb2e872a1c1f54abcc43e492a7-hafula.png',
        'Shampoo per gatti',
        'Shampo per gatti antipulci. Adatto ad ogni tipo di pelo.',
        4.99
    ),

    new Product(
        $healthcare,
        'https://www.speedy-care.it/wp-content/uploads/2021/09/CANE-E-GATTO-talco.png',
        'Salviette umide per animali',
        'Salviette umide per animali di ogni dimensione. Delicato e facile da usare.',
        3.99
    ),

    new Product(
        $toys,
        'https://www.gemimports.co.uk/gemimportsltd/i/pmi/pet6419ob.png?_t=2281162543',
        'Giocattolo di gomma a ingranaggio',
        'Giocattolo in gomma per far divertire i tuoi cani. Resistente e divertente.',
        14.99
    ),

    new Product(
        $toys,
        'https://petsrus.ie/wp-content/uploads/2022/01/nina-ottosson-buggin-out-puzzle-2.png',
        'Puzzle per gatti',
        'Gioco per allenare la reattività del tuo gatto.',
        11.99
    ),

    new Product(
        $toys,
        'https://www.agripetgarden.it/media/catalog/product/cache/39bb8e22b0fe81fa1cbd673da9751694/t/i/tiragraffi_in_cartone_con_erba_gatta_sofa_2_44x22x6_6cm.png',
        'Tiragraffi',
        'Tiragraffi in cartone con erbagatta per le unghie del tuo gatto',
        22.99
    ),

    new Product(
        $toys,
        'https://www.agripetgarden.it/media/catalog/product/cache/39bb8e22b0fe81fa1cbd673da9751694/p/a/palla_interattiva_per_cani_8cm.png',
        'Pallina per animali',
        'Pallina con contenitore per crocchette. Ideale per cani e gatti.',
        4.99
    ),
];

$cart = Cart::getInstance();
