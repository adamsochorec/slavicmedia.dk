<?php
session_start();
if (isset($_GET['lang'])) {
    $supportedLanguages = ['en', 'da'];

     if (isset($_SESSION['lang'])) {
          if ($_SESSION['lang'] == "en") {
               $_SESSION['lang'] = "da";
          } else {
               $_SESSION['lang'] = "en";
          }
     }
     var_dump($_SESSION['lang']);
    $currentPage = $_SESSION['pageID'];

    if ($currentPage === 'some_specific_page') {
        // Additional logic for a specific page
        // You can nest more code here
    }

    header("Location: http://slavicmedia.local/");
}
// find a way how to preserve the current loaded file so when I switch the language it throws me on the same page
?>