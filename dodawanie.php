<?php
require "autoload.php";

if (isset($_POST['nazwa_ksiazki'])){
  $nazwa = $_POST['nazwa_ksiazki'];
  $sql = "INSERT INTO books (title) VALUES ('$nazwa')";
  mysqli_query($conn, $sql);

  header("Location: /manage-books.php");
  die();
}

?>
