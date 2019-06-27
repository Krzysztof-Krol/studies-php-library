<?php
$title = "Wszystkie książki";

include "autoload.php";
include "head.php";

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
                            echo '<td class="align-middle d-none">'.$row['id'].'</td>';
                            echo '<td class="align-middle">'.$row['title'].'</td>';
                            echo '<td class="align-middle">'.$row['holding'].'</td>';
                            echo '<td class="align-middle cleaning">'.$row['borrowed'].'</td>';
                            echo '<td class="align-middle cleaning">'.$row['regived'].'</td>';

                          if ($row['holding'] != 'Krzysztof'){
                            echo '<td class="align-middle text-center"><form action="wypozyczanie.php" method="post"><input type="text" class="d-none" name="book_id" value="'.$row['id'].'"><input type="submit" class="btn btn-success" name="wypozycz" value="Wypożycz"></form></td>';
                          } else {
                            echo '<td class="align-middle text-center"><form action="oddawanie.php" method="post"><input type="text" class="d-none" name="book_id" value="'.$row['id'].'"><input type="submit" class="btn btn-info" name="oddaj" value="Oddaj"></form></td>';
                          }
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
