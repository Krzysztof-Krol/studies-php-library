<?php
require "autoload.php";

if (isset($_POST['book_id'])){
  $id = $_POST['book_id'];
  $sql = "UPDATE books SET holding='Krzysztof', borrowed=NOW(), regived=DATE_ADD(NOW(), INTERVAL 1 MONTH) WHERE id='$id'";
  mysqli_query($conn, $sql);

  header("Location: /all-books.php");
  die();
}
?>
