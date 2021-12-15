<?php
include_once __DIR__ . "/../../functions.php";
?>

<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <?php
        if (isProduction()) {
            include_once __DIR__ . "/ga.php";
        }
        ?>

        <title>Forbidden</title>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Jahidul Pabel Islam" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="robots" content="noindex" />

        <?php include_once __DIR__ . "/../../favicons.php"; ?>

        <link href="<?php asset("/assets/css/error.min.css"); ?>" rel="stylesheet" type="text/css" media="all" title="style"/>
    </head>

    <body>
        <main class="page">
            <p class="error">You Have Found Something Top Secret!</p>
        </main>

        <script src="<?php asset("/assets/js/global.min.js"); ?>" type="application/javascript"></script>
    </body>
</html>
