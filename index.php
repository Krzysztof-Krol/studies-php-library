<?php

require "autoload.php";
require_once("libs/smarty/Smarty.class.php");

$pagge = new Page;

$smarty->assign('title', 'SEO report generator');
$smarty->assign('recent', array(
  'head' => array(
    'header' => 'Recent reports',
    'name' => 'Client name',
    'category' => 'Category',
    'date' => 'Report date',
  ),
  'body' => array(
    'name' => 'Any Company',
    'date' => '2019.06.26',
    'category' => 'Tech Optimisation',
    'pdf' => 'Export to PDF',
    'duplicate' => 'Duplicate',
    'edit' => 'Edit',
    'remove' => 'Remove'
  )
));

$smarty->display('home.tpl');
?>
