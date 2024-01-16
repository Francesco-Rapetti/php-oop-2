<?php
    require __DIR__ . "/data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="background-image: url('<?= $animalsProduct->image ?>');">
        <div class="row gap-3">
            <div class="glass w-auto">
                <span class="fs-1 fw-bold"><?= $animalsProduct->name ?></span>
            </div>

            <!-- spacer -->
            <div></div>

            <?php foreach ($products as $product) : ?>
                <div class="card glass" style="width: 18rem;">
                    <div class="card-img-top-container d-flex align-items-center justify-content-center">
                        <img src="<?= $product->image ?>" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->name ?></h5>
                        <p class="card-text"><?= $product->description ?></p>
                        <div class="d-flex align-items-center mt-3">
                            <a href="#" class="btn btn-primary me-3">Acquista</a>
                            <p class="fw-bold fs-5"><?= $product->price ?> €</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>

<style>
    body {
        padding: 50px 0;
    }

    .container {
        background-size: 30%;
        border: 2px solid black;
        border-radius: 16px;
        padding: 1rem 2rem;
        margin: 50px auto;
        overflow: hidden;
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

    p { margin: 0; }
</style>