<?php
include_once __DIR__ . "/functions.php";

$isDev = isset($_GET["dev"]) && !($_GET["dev"] === "false" || $_GET["dev"] === "0");
?>

<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <?php
        $title = "Social Media Links | Jahidul Pabel Islam - Full Stack Developer";
        $description = "Social media links for Jahidul Pabel Islam, a Full Stack Developer in Web &amp; Software based at Bognor Regis, West Sussex down by the South Coast of England.";
        ?>

        <title><?php echo $title; ?></title>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Jahidul Pabel Islam" />
        <meta name="description" content="<?php echo $description; ?>" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta property="og:locale" content="en_GB" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo $title; ?>" />
        <meta property="og:description" content="<?php echo $description; ?>" />
        <meta property="og:url" content="https://links.jahidulpabelislam.com" />
        <meta property="og:site_name" content="Jahidul Pabel Islam" />

        <meta property="og:image" content="https://links.jahidulpabelislam.com<?php asset("/assets/images/social-card.png"); ?>" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $title; ?>" />

        <link rel="apple-touch-icon" sizes="57x57" href="<?php asset("/assets/favicons/apple-touch-icon-57x57.png"); ?>" />
        <link rel="apple-touch-icon" sizes="60x60" href="<?php asset("/assets/favicons/apple-touch-icon-60x60.png"); ?>" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php asset("/assets/favicons/apple-touch-icon-72x72.png"); ?>" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php asset("/assets/favicons/apple-touch-icon-76x76.png"); ?>" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php asset("/assets/favicons/apple-touch-icon-114x114.png"); ?>" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php asset("/assets/favicons/apple-touch-icon-120x120.png"); ?>" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php asset("/assets/favicons/apple-touch-icon-144x144.png"); ?>" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php asset("/assets/favicons/apple-touch-icon-152x152.png"); ?>" />
        <link rel="apple-touch-icon" sizes="180x180" href="<?php asset("/assets/favicons/apple-touch-icon-180x180.png"); ?>" />
        <link rel="icon" type="image/png" sizes="32x32" href="<?php asset("/assets/favicons/favicon-32x32.png"); ?>" />
        <link rel="icon" type="image/png" sizes="194x194" href="<?php asset("/assets/favicons/favicon-194x194.png"); ?>" />
        <link rel="icon" type="image/png" sizes="192x192" href="<?php asset("/assets/favicons/android-chrome-192x192.png"); ?>" />
        <link rel="icon" type="image/png" sizes="16x16" href="<?php asset("/assets/favicons/favicon-16x16.png"); ?>" />
        <link rel="manifest" href="<?php asset("/assets/favicons/site.webmanifest"); ?>" />
        <link rel="mask-icon" href="<?php asset("/assets/favicons/safari-pinned-tab.svg"); ?>" color="#0375b4" />
        <link rel="shortcut icon" href="<?php asset("/favicon.ico"); ?>" />
        <meta name="msapplication-TileColor" content="#0375b4" />
        <meta name="msapplication-TileImage" content="<?php asset("/assets/favicons/mstile-144x144.png"); ?>" />
        <meta name="msapplication-config" content="<?php asset("/assets/favicons/browserconfig.xml"); ?>" />
        <meta name="theme-color" content="#f5f5f5" />

        <?php if ($isDev) { ?>
            <link href="<?php asset("/assets/css/main.css"); ?>" rel="stylesheet" type="text/css" media="all" title="style"/>
        <?php } else { ?>
            <link href="<?php asset("/assets/css/main.min.css"); ?>" rel="stylesheet" type="text/css" media="all" title="style"/>
        <?php } ?>
    </head>

    <body>
        <main class="page">
            <div class="page__inner">
                <a class="social-link social-link--facebook" href="https://facebook.com/jahidulpabelislam/" target="_blank" rel="noopener noreferrer">
                    <img class="social-link__image" src="<?php asset("/assets/images/facebook.svg"); ?>" alt="Add Me facebook.com/jahidulpabelislam" />
                    <p class="social-link__text">/jahidulpabelislam</p>
                </a>

                <a class="social-link social-link--twitter" href="https://twitter.com/itsjahidulislam/" target="_blank" rel="noopener noreferrer">
                    <img class="social-link__image" src="<?php asset("/assets/images/twitter.png"); ?>" alt="Follow Me @ItsJahidulIslam" />
                    <p class="social-link__text">@ItsJahidulIslam</p>
                </a>

                <a class="social-link social-link--instagram" href="https://instagram.com/jahidulpabelislam/" target="_blank" rel="noopener noreferrer">
                    <span class="social-link__image"><i></i></span>
                    <p class="social-link__text">@jahidulpabelislam</p>
                </a>

                <a class="social-link social-link--snapchat" href="https://snapchat.com/add/jahidulpislam/" target="_blank" rel="noopener noreferrer">
                    <object class="social-link__image" data="https://feelinsonice-hrd.appspot.com/web/deeplink/snapcode?username=jahidulpislam&amp;type=PNG" type="image/png"></object>
                    <p class="social-link__text">jahidulpislam</p>
                </a>

                <a class="social-link social-link--linkedin" href="https://uk.linkedin.com/in/jahidulpabelislam/" target="_blank" rel="noopener noreferrer">
                    <img class="social-link__image" src="<?php asset("/assets/images/linkedin.svg"); ?>" alt="Find me on LinkedIn /jahidulpabelislam" />
                    <p class="social-link__text">/jahidulpabelislam</p>
                </a>

                <a class="social-link social-link--github" href="https://github.com/jahidulpabelislam/" target="_blank" rel="noopener noreferrer">
                    <img class="social-link__image" src="<?php asset("/assets/images/github.svg"); ?>" alt="Find me on GitHub /jahidulpabelislam" />
                    <p class="social-link__text">/jahidulpabelislam</p>
                </a>

                <a class="social-link social-link--instagram" href="https://instagram.com/jpi.dev/" target="_blank" rel="noopener noreferrer">
                    <span class="social-link__image"><i></i></span>
                    <p class="social-link__text">@jpi.dev</p>
                </a>
            </div>
        </main>

        <?php if ($isDev) { ?>
            <script src="<?php asset("/assets/js/main.js"); ?>" type="application/javascript"></script>
        <?php } else { ?>
            <script src="<?php asset("/assets/js/main.min.js"); ?>" type="application/javascript"></script>
        <?php } ?>
        <script type="application/javascript">
            jQuery(document).on("ready", function() {
                new StickyFooter(".page");
            });
        </script>
    </body>
</html>
