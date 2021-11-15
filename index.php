<?php
include_once __DIR__ . "/functions.php";

$environment = getenv("APPLICATION_ENV") ?? "local";

$isProduction = $environment === "production";

$liveDomain = "https://links.jahidulpabelislam.com";

$isDev = isset($_GET["dev"]) && !($_GET["dev"] === "false" || $_GET["dev"] === "0");

$referer = $_SERVER["HTTP_REFERER"] ?? null;
?>

<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <?php
        if ($isProduction) {
            ?>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-46ZL6G6SEK"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'G-46ZL6G6SEK');
            </script>
            <?php
        }
        ?>

        <?php
        $title = "Links | Jahidul Pabel Islam - Full Stack Developer";
        $description = "Links for Jahidul Pabel Islam, a Full Stack Developer in Web &amp; Software based at Bognor Regis, West Sussex down by the South Coast of England.";
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
        <meta property="og:url" content="<?php echo $liveDomain ?>" />
        <meta property="og:site_name" content="Jahidul Pabel Islam" />

        <meta property="og:image" content="<?php echo $liveDomain ?><?php asset("/assets/images/social-card.png"); ?>" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $title; ?>" />

        <link rel="canonical" href="<?php echo $liveDomain ?>" />
        <meta name="robots" content="noindex" />

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

        <link href="<?php asset("/assets/css/main" . ($isDev ? "" : ".min" ) . ".css"); ?>" rel="stylesheet" type="text/css" media="all" title="style"/>
    </head>

    <body>
        <main class="page">
            <?php
            if (!$referer || strpos($referer, "jahidulpabelislam.com") === false) {
                ?>
                <div class="page__header">
                    <a class="social-link social-link--logo" href="https://linkto.jahidulpabelislam.com/site/" target="_blank">
                        <img class="social-link__image social-link__image--logo" src="<?php asset("/assets/images/jpi.png"); ?>" alt="Logo" />
                        &nbsp;<p class="social-link__text">jahidulpabelislam.com</p>
                    </a>
                </div>
                <?php
            }
            ?>

            <div class="page__socials">
                <?php
                $defaultUsername = "jahidulpabelislam";
                $items = [
                    "linkedin" => [
                        "name" => "LinkedIn",
                    ],
                    "github" => [
                        "name" => "GitHub",
                    ],
                    "instagram" => [],
                    "npm" => [
                        "name" => "NPM",
                        "icon" => "npm.png",
                    ],
                    "packagist" => [],
                ];

                foreach ($items as $type => $item) {
                    if ($referer && strpos($referer, $type) !== false) {
                        continue;
                    }
                    $name = $item["name"] ?? ucwords($type);
                    $username = $item["username"] ?? $defaultUsername;
                    $icon = $item["icon"] ?? "$type.svg";
                    ?>
                    <a class="social-link social-link--<?php echo $type; ?>" href="https://linkto.jahidulpabelislam.com/<?php echo $type; ?>/" target="_blank" rel="noopener noreferrer">
                        <?php
                        if ($type === "instagram") { ?>
                            <span class="social-link__image"><i></i></span>
                        <?php } else { ?>
                            <img class="social-link__image" src="<?php asset("/assets/images/" . $icon); ?>" alt="Find me on <?php echo "$name $username"; ?>" />
                        <?php } ?>

                        &nbsp;<p class="social-link__text"><?php echo $username; ?></p>
                    </a>
                <?php } ?>
            </div>
        </main>

        <script src="<?php asset("/assets/js/main" . ($isDev ? "" : ".min") . ".js"); ?>" type="application/javascript"></script>
        <script type="application/javascript">
            jQuery(function() {
                jQuery(".page").adjustHeightForScreen();
            });
        </script>
    </body>
</html>
