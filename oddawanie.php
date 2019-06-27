<?php
require "autoload.php";

if (isset($_POST['book_id'])){
  $id = $_POST['book_id'];
  $sql = "UPDATE books SET holding='', borrowed=0, regived=0 WHERE id='$id'";
  mysqli_query($conn, $sql);

  header("Location: /all-books.php");
  die();
}
?>
