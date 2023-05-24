<meta charset="UTF-8" >
<meta name="author" content="Slavic Media" >
<html lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge" >
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="icon" href="/img/favicon.png" type="image/png" >
<link rel="stylesheet" href="/assets/style.css" >
<?php
  $current_url = $_SERVER['REQUEST_URI'];
  $is_danish = strpos($current_url, '/dk') !== false;
?>