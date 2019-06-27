<?php
require "autoload.php";
?>

<div class="my-navigation col-md-3 p-5 pb-0 border-delicate h-100 bg-white position-fixed overflow-auto">
  <aside class="">
    <nav>
      <!-- Navigation for all users -->
      <span class="h4">Twoje konto</span>
      <ul class="nav flex-column mt-3">
        <li class="nav-item"><a href="/" class="nav-link">Strona główna</a></li>
        <li class="nav-item"><a href="/all-books.php" class="nav-link">Wszystkie książki</a></li>
        <span class="h4 mt-3">Panel Administratora</span>
        <li class="nav-item"><a href="/manage-books.php" class="nav-link">Zarządzaj książkami</a></li>
    </nav>
  </aside>
  <div class="position-absolute footer pl-3 pr-3">
    <footer class="w-100 p-3 bg-white text-right border-top-delicate">
      <a class="text-dark" href="https://royalcode.eu">royalcode.eu</a><br>
    </footer>
  </div>
</div> <!-- /col -->
