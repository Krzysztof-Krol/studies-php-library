<?php

$title = "Zarządzanie księgozbiorem";
require "autoload.php";
require "head.php";

$allbooks = mysqli_query($conn, "SELECT * FROM books");
$row = $allbooks->fetch_assoc();
?>

<!-- All books in library -->
<div class="container-fluid d-flex flex-column m-auto h-100 pr-0">
    <div class="row w-100 h-100">
        <div class="col-md-9 pl-5 pr-5 pt-3 pb-3 h-100 overflow-auto">
          <header>
            <h1 class="h1"><?=$title?></h1>
            <span class="d-block mb-4 text-secondary">Krzysztof Król</span>
          </header>

          <div class="row">
            <div class="col-md-12">
              <main>
                <div class="card">
                  <div class="card-body">

                    <form class="mb-5" action="/dodawanie.php" method="post">
                    <h3>Dodaj nową książkę</h3>
                    <input class="form-control w-50 d-inline-block" type="text" name="nazwa_ksiazki" value="" placeholder="Tytuł książki">
                    <input class="btn btn-success d-inline-block" type="submit" name="" value="Dodaj">
                    </form>

                    <h3>Podgląd księgozbioru</h3>
                    <table class="table table-sm table-light table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Nazwa</th>
                          <th scope="col">Wypożyczył</th>
                          <th scope="col">Wypożyczenie</th>
                          <th scope="col">Do oddania</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        while ($row = $allbooks->fetch_assoc()) {
                          echo '<tr>';
                            echo '<td class="align-middle">'.$row['title'].'</td>';
                            echo '<td class="align-middle">'.$row['holding'].'</td>';
                            echo '<td class="align-middle cleaning">'.$row['borrowed'].'</td>';
                            echo '<td class="align-middle cleaning">'.$row['regived'].'</td>';
                            echo '<td class="align-middle"><form action="usuwanie.php" method="post"><input type="text" class="d-none" name="book_id" value="'.$row['id'].'"><input type="submit" class="btn btn-danger" name="usun" value="Usuń"></form></td>';
                          echo '</tr>';
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </main>
            </div> <!-- /col -->
          </div> <!-- /row -->
        </div> <!-- /col -->

        <?php include "nav.php"; ?>

    </div> <!--/row-->
</div> <!-- /container -->

<?php include "footer.php" ?>
