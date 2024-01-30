<?php
function generateLangSwitchURL($langCode) {
    $uri = $_SERVER['REQUEST_URI'];

    // Remove any existing language code from the start of the URI.
    // This regex looks for a leading slash, followed by exactly two letters (a language code),
    // followed by another slash or the end of the string.
    $uri = preg_replace("/^\/[a-z]{2}(\/|$)/", "/", $uri);

    // Insert the new language code after the initial slash
    return "/$langCode" . $uri;
}

  ?>
