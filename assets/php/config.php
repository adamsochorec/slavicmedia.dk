<?php session_start();

// Define a list of supported languages to avoid arbitrary file inclusion
$supportedLanguages = ['en', 'da'];

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = "en";
} else if (isset($_GET['lang']) && in_array($_GET['lang'], $supportedLanguages)) {
    $_SESSION['lang'] = $_GET['lang'];
}
// Ensure the requested language file exists before requiring it
$languageFile = "languages/" . $_SESSION['lang'] . ".php";
if (file_exists($languageFile)) {
    require_once $languageFile;
} else {
    // Handle the case where the language file doesn't exist (e.g., fallback to a default language).
    // You can add code here to provide a graceful error message or take other appropriate actions.
    die("Language file not found.");
}
?>
