<?php
include_once __DIR__ . "/../../../bootstrap.php";

$site = \JPI\Site::get();
?>

<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <title>Not Found</title>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Jahidul Pabel Islam" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="robots" content="noindex" />

        <?php $site->renderFavicons(); ?>

        <link href="<?php echo $site::asset("/assets/css/error.css"); ?>" rel="stylesheet" type="text/css" media="all" title="style"/>
    </head>

    <body>
        <main class="page">
            <p class="error">Hmm... Not Sure What You Are Looking For, But My Links Are <a href="/">Here</a>.</p>
        </main>

        <script src="<?php echo $site::asset("/assets/js/global.js"); ?>" type="application/javascript"></script>
    </body>
</html>
