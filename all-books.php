<?php

require "autoload.php";

$smarty->assign('title', 'Wszystkie książki');

$result = mysqli_query($conn, "SELECT * FROM books");
$num_rows = mysqli_num_rows($result);
$smarty->assign('count_max', $num_rows);

$book_title="";
$smarty->assign('recent', array(
  'head' => array(
    'header' => 'Wszystkie książki',
    'name' => 'Tytuł',
    'category' => 'Kategoria',
    'date' => 'Data wypożyczenia',
    'date_return' => 'Data oddania'
  ),
  'body' => array(
    'name' => 'title',
    'category' => 'Tech Optimisation',
    'date' => '0000.00.00',
    'date_return' => '0000.00.00'
  )
));

$smarty->display('all-books.tpl');
