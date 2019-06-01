<?php

require_once("libs/smarty/Smarty.class.php");

$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
$smarty->cache_dir = 'cache';
$domain = $_SERVER['HTTP_HOST'];
$smarty->assign('domain', $domain);
$smarty->assign('nav', array(
  'yours_account' => 'Twoje konto',
  'admin_account' => 'Administrator',
  'home' => 'Strona główna',
  'new' => 'Dodaj książkę',
  'all' => 'Wszystkie książki',
  'users' => 'Zarządzaj użytkownikami',
  'categories' => 'Zarządzaj kategoriami',
  'settings' => 'Ustawienia',
  'link' => array(
    'home' => 'index.php',
    'new' => 'add-book.php',
    'all' => 'all-books.php',
    'users' => 'manage-users.php',
    'categories' => 'manage-categories.php',
    'settings' => 'settings.php'
  )
)
);

$smarty->assign('author', array(
  'name' => 'Krzysztof Król',
  'website' => 'https://royalcode.eu',
  'domain' => 'royalcode.eu',
  'by' => 'Krzysztof Król',
  'github' => 'https://github.com/Krzysztof-Krol'
));


require("classes/connect.php");
// require("classes/login.php");

?>
