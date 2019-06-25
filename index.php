<?php
$title = "Biblioteka";

include "autoload.php";
include "head.php";

$allbooks = mysqli_query($conn, "SELECT * FROM books WHERE holding='Krzysztof'");
$row = $allbooks->fetch_assoc();
?>

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
                      <h2 class="card-title">Twoje książki</h2>
                      <table class="table table-sm table-light table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Nazwa</th>
                            <th scope="col">Wypożyczył</th>
                            <th scope="col">Wypożyczenie</th>
                            <th scope="col">Do oddania</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          while ($row = $allbooks->fetch_assoc()) {
                            echo '<tr>';
                              echo '<td class="align-middle d-none">'.$row['id'].'</td>';
                              echo '<td class="align-middle">'.$row['title'].'</td>';
                              echo '<td class="align-middle">'.$row['holding'].'</td>';
                              echo '<td class="align-middle">'.$row['borrowed'].'</td>';
                              echo '<td class="align-middle">'.$row['regived'].'</td>';
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
