<?php 

function slugUrl(string $string): string{
    $string = filter_var(mb_strtolower($string), FILTER_SANITIZE_STRIPPED);
    
    $formats = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';

    $replace = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';

    $slug = str_replace([
        "-----", 
        "----",
        "---", 
        "--"
    ],

    "-", str_replace(" ", "-",
            trim(
                strtr(
                utf8_decode($string), 
                utf8_decode($formats),
                 $replace
            ))
        )
    );
    return $slug;
}

function url(string $path = null): string
{
    if (strpos($_SERVER['HTTP_HOST'], "localhost")) {
        if ($path) {
            return BASE_URL . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        return BASE_URL;
    }

    if ($path) {
        return BASE_URL . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return BASE_URL;
}

