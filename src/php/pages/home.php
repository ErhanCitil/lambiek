<?php

require_once('../common/pdo.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../../img/index.ico">
    <title>Lambiek</title>
    <link rel="stylesheet" href="../../../dist/output.css">
</head>

<body">
    <div class="page_content">
        <?php require_once('../../components/header.html'); ?>

        <article class="mt-28 mb-auto">
            <section class="">
                <h1 class="mx-auto w-fit uppercase text-modern_white_smoke text-xl font-semibold">Comic Book shop Lambiek</h1>
                <br>
                <p class="w-3/5 mx-auto">
                    Lambiek is Europe's first comic shop and probably the oldest existing comic
                    shop worldwide. It has been a hallmark in the world of comics since the opening
                    in 1968.

                    Our site presents the Comiclopedia, an online encyclopedia of thousands of
                    comic artists from all over the world. You can also browse through our webshop
                    for old and new comics, prints and original artwork. We ship worldwide.

                    Come and visit our shop when you are in Amsterdam! From Central Station, you
                    can take any metro train of the subway system. Ride one stop to Nieuwmarkt
                    station. Take the Koningsstraat exit and you will find us at the top of the
                    escalator!
                </p>
            </section>
        </article>

        <?php require_once('../../components/footer.html') ?>
    </div>
</body>

</html>