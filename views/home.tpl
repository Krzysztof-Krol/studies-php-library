{*
*  Author: Krzysztof Król
*  Website: https://royalcode.eu
*  Github: https://github.com/Krzysztof-Krol
*  Licence: GNU GPL v3
*}

{include file="head.tpl"}

  {* If not logged in *}
  {* include file="login-form.tpl" *}

  {* If logged in *}
  <div class="container-fluid d-flex flex-column m-auto h-100 pr-0">
      <div class="row w-100 h-100">
          <div class="col-md-9 pl-5 pr-5 pt-3 pb-3 h-100 overflow-auto">
            <header>
              <h1 class="h1">{$title}</h1>
              <span class="d-block mb-4 text-secondary">{$author.by}</span>
            </header>

            <div class="row">
              <div class="col-md-12">
                <main>

                  <div class="card">
                    <div class="card-body">
                      <h2 class="card-title">{$recent.head.header}</h2>
                      <table class="table table-sm table-light table-striped">
                        <thead>
                          <tr>
                            <th scope="col">{$recent.head.name}</th>
                            <th scope="col">{$recent.head.date}</th>
                            <th scope="col">{$recent.head.category}</th>
                            <th scope="col">{* Export to PDF *}</th>
                            <th scope="col">{* Duplicate *}</th>
                            <th scope="col">{* Edit *}</th>
                            <th scope="col">{* Remove *}</th>
                          </tr>
                        </thead>
                        <tbody>
                          {for $i=1 to 9}
                            <tr>
                              <td class="align-middle">{$recent.body.name}</td>
                              <td class="align-middle">{$recent.body.date}</td>
                              <td class="align-middle">{$recent.body.category}</td>
                              <td>
                                <a href="#" class="btn btn-outline-success">{$recent.body.pdf}</a>
                              </td>
                              <td>
                                <a href="#" class="btn btn-outline-primary">{$recent.body.duplicate}</a>
                              </td>
                              <td>
                                <a href="#" class="btn btn-outline-primary">{$recent.body.edit}</a>
                              </td>
                              <td>
                                <a href="#" class="btn btn-outline-danger">{$recent.body.remove}</a>
                              </td>
                            </tr>
                          {/for}
                        </tbody>
                      </table>
                    </div>
                  </div>

                  {If $i>=10}
                      <div class="w-100 text-center">
                        <div class="btn btn-primary m-4">
                          Load more
                        </div>
                      </div>
                  {/if}

                </main>
              </div> <!-- /col -->
            </div> <!-- /row -->
          </div> <!-- /col -->

          {include file="nav.tpl"}

      </div> <!--/row-->
  </div> <!-- /container -->

{include file="footer.tpl"}
