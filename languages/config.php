<?php 
session_start();

$supportedLanguages = ['en', 'da'];

// Default language is English if not set
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "en";
}

// Check if the 'lang' parameter is in the URL and if it's a supported language
if (isset($_GET['lang']) && in_array($_GET['lang'], $supportedLanguages)) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Redirect to a URL with the correct language prefix if it's not already present
$currentLang = $_SESSION['lang'];
if (!preg_match("/^\/$currentLang\//", $_SERVER['REQUEST_URI'])) {
    header("Location: /$currentLang" . $_SERVER['REQUEST_URI']);
    exit;
}

$languageFile = "languages/" . $_SESSION['lang'] . ".php";
if (file_exists($languageFile)) {
    require_once $languageFile;
} else {
    die("Language file not found.");
}
?>
