<?php
include_once __DIR__ . "/functions.php";

$liveDomain = "https://links.jahidulpabelislam.com";

$isDev = isset($_GET["dev"]) && !($_GET["dev"] === "false" || $_GET["dev"] === "0");

$referer = $_SERVER["HTTP_REFERER"] ?? null;
?>

<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <?php
        if (isProduction()) {
            include_once __DIR__ . "/ga.php";
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

        <?php include_once __DIR__ . "/favicons.php"; ?>

        <link href="<?php asset("/assets/css/main" . ($isDev ? "" : ".min" ) . ".css"); ?>" rel="stylesheet" type="text/css" media="all" title="style"/>
    </head>
    <body>
        <main class="page">
            <div class="links">
                <?php
                if (!$referer || strpos($referer, "jahidulpabelislam.com") === false) {
                    ?>
                    <div class="link-item link-item--site">
                        <a class="link-item__link" href="https://linkto.jahidulpabelislam.com/site/" target="_blank">
                            <img class="link-item__image" src="<?php asset("/assets/images/jpi.png"); ?>" alt="Logo" />
                            &nbsp;<p class="link-item__text">jahidulpabelislam.com</p>
                        </a>
                    </div>
                    <?php
                }
                ?>

                <?php
                $defaultUsername = "jahidulpabelislam";
                $items = [
                    "linkedin" => [
                        "name" => "LinkedIn",
                    ],
                    "github" => [
                        "name" => "GitHub",
                    ],
                    "npm" => [
                        "name" => "NPM",
                    ],
                    "packagist" => [],
                    "instagram" => [],
                ];

                foreach ($items as $type => $item) {
                    if ($referer && strpos($referer, $type) !== false) {
                        continue;
                    }
                    $name = $item["name"] ?? ucwords($type);
                    $username = $item["username"] ?? $defaultUsername;
                    $icon = $item["icon"] ?? "$type.svg";
                    ?>
                    <div class="link-item link-item--<?php echo $type; ?>">
                        <a
                            class="link-item__link"
                            href="https://linkto.jahidulpabelislam.com/<?php echo $type; ?>/"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <?php
                            if ($type === "instagram") { ?>
                                <span class="link-item__image"><i></i></span>
                            <?php } else { ?>
                                <img
                                    class="link-item__image"
                                    src="<?php asset("/assets/images/" . $icon); ?>"
                                    alt="Find me on <?php echo "$name $username"; ?>"
                                />
                            <?php } ?>

                            &nbsp;<p class="link-item__text"><?php echo $username; ?></p>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </main>

        <script src="<?php asset("/assets/js/global" . ($isDev ? "" : ".min") . ".js"); ?>" type="application/javascript"></script>
    </body>
</html>
