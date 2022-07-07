<?php

require_once('../common/pdo.php'); 

$comic = findComicByID($_GET['comicID']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/index.ico">
    <title>Comic details</title>
    <link rel="stylesheet" href="/dist/output.css">
</head>

<body>
<div class="page_content">

<?php require_once('../../components/header_shop.html'); ?>

    <article class="p-28">
        <section class="text-justify font-serif">
            <table>
            <?php foreach ($comic as $comicProperty) { ?>
                <tr><td><h5><?= $comicProperty ?></h5></td></tr>     
            <?php }  ?>
            </table>
        </section>
    </article>
<?php require_once('../../components/footer.html') ?>
</div>
</body>
</html>