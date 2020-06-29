<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <title>Php web sito</title>
</head>
<body>
    <?php require "bloks/header.php" ?>

    <div class="container mt-5">
        <h3 class="mb-5">News</h3>
        <div class="d-flex flex-wrapp">
        <?php
            for($i = 0; $i < 5; $i++):
        ?>
               <div class="card mb-4 shadow-sm d-flex  align-items-center ">
                <div class="card-header ">
                     <h4 class="my-0 font-weight-normal">Simpel text</h4>
                </div>
                 <div class="card-body">
                <img src="img/<?php echo ($i +1 )?>.jpg" class="img-thumbnail">
                    <ul class="list-unstyled mt-3 mb-4 ">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                </div>
            </div>
            <?php endfor; ?>
        </div>

    </div>

    <?php require "bloks/footer.php" ?>
</body>
</html>