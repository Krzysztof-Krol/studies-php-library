<?php
/**
 * Author: Krzysztof Król
 * Website: https://royalcode.eu
 * Github: https://github.com/Krzysztof-Krol
 * Licence: GNU GPL v3
 * --
 * Name:
 *
 */

class Page
{

  function __construct()
  {
    
    $smarty = new Smarty();
    $smarty->template_dir = 'views';
    $smarty->compile_dir = 'tmp';
    $smarty->cache_dir = 'cache';

    $domain = $_SERVER['HTTP_HOST'];
    $smarty->assign('domain', $domain);

    $smarty->assign('nav', array(
      'home' => 'Home',
      'new' => 'Add new report',
      'all' => 'All reports',
      'my' => 'My reports',
      'users' => 'Manage users',
      'categories' => 'Manage categories',
      'settings' => 'Settings',
      'link' => array(
        'home' => 'index.php',
        'new' => 'new-report.php',
        'all' => 'all-reports.php',
        'my' => 'my-reports.php',
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
      'by' => 'By royalcode.eu',
      'github' => 'https://github.com/Krzysztof-Krol',
      'like_it' => 'Do you like it?',
      'smile' => ':-)',
      'donate' => array(
        'link' => 'donate-me.php',
        'encouragement' => 'Donate me'
      )
    ));
  }
}


?>
