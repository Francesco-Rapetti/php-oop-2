<?php
require __DIR__ . "/data.php";
foreach ($categories as $category) {
    $category->setProducts(array_filter($products, fn (Product $product) => $product->category->name === $category->name));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn3.iconfinder.com/data/icons/product-category/48/ecommerce_pets-512.png" type="image/x-icon">
    <title>Pets ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="w-100 z-2">
        <nav class="navbar bg-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                    <img src="https://cdn3.iconfinder.com/data/icons/product-category/48/ecommerce_pets-512.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    <div>Pets ecommerce</div>
                </a>
                <div class="menu">
                    <button class="btn">
                        <i class="fa-solid fa-user"></i>
                    </button>

                    <button class="btn position-relative">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <div class="cart-counter bg-danger text-white rounded-circle">
                            <?= $cartCounter ?>
                        </div>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <?php foreach ($categories as $category) : ?>
            <div class="container" style="background-image: url('<?= $category->image ?>');">
                <div class="row">

                    <div class="glass w-auto pb-2 m-2">
                        <div class="fs-1 fw-bold"><?= $category->name ?></div>
                        <span><?= $category->description ?></span>
                    </div>

                    <!-- spacer -->
                    <div class="spacer"></div>

                    <?php foreach ($category->products as $product) : ?>
                        <div class="card m-2 glass" style="width: 18rem;">
                            <div class="card-img-top-container d-flex align-items-center justify-content-center">
                                <img src="<?= $product->image ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= $product->name ?></h5>
                                <p class="card-text"><?= $product->description ?></p>
                                <div class="d-flex align-items-center mt-3">
                                    <a href="#" class="btn btn-primary me-3">Aggiungi <i class="fa-solid fa-cart-arrow-down"></i></a>
                                    <p class="fw-bold fs-5"><?= $product->price ?> €</p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </main>
</body>

</html>

<style>
    body {
        padding: 50px 0;
    }

    .navbar-brand img {
        width: 60px;
        height: 50px;
    }

    .cart-counter {
        position: absolute;
        top: 0;
        right: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 18px;
        height: 18px;
    }

    .container {
        background-size: 30%;
        border: 2px solid black;
        border-radius: 16px;
        padding: 1rem 2rem;
        margin: 50px auto;
        overflow: hidden;
    }

    .spacer {
        height: 0;
        margin: 0;
        padding: 0;
    }

    .glass {
        background: rgba(253, 251, 251, 0.48);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(14.3px);
        -webkit-backdrop-filter: blur(14.3px);
    }

    .card-img-top-container {
        height: 262px;
    }

    .card-img-top {
        object-fit: contain;
        max-height: 262px;
        max-width: 262px;
    }

    p {
        margin: 0;
    }
</style>