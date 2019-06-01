<?php

require "autoload.php";

$smarty->assign('title', 'Biblioteka');
$smarty->assign('recent', array(
  'head' => array(
    'header' => 'Twoje książki',
    'name' => 'Tytuł',
    'category' => 'Kategoria',
    'date' => 'Data wypożyczenia',
    'date_return' => 'Data oddania'
  ),
  'body' => array(
    'name' => 'Any Company',
    'category' => 'Tech Optimisation',
    'date' => '2019.06.26',
    'date_return' => '2019.06.26'
  )
));

$smarty->display('home.tpl');
?>
