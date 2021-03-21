<?php

function asset(string $src, $ver = false) {
    if ($ver === false) {
        $ver = "1"; // Default

        $filepath = __DIR__ . $src;
        if (file_exists($filepath)) {
            $ver = date("mdYHi", filemtime($filepath));
        }
    }

    if (empty($ver)) {
        echo $src;
    }

    echo "$src?v=$ver";
}
