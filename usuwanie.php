<?php
require "autoload.php";

if (isset($_POST['book_id'])){
  $id = $_POST['book_id'];
  $sql = "DELETE FROM books WHERE id='$id'";
  mysqli_query($conn, $sql);

  header("Location: /manage-books.php");
  die();
}

?>
