{*
*  Author: Krzysztof Król
*  Website: https://royalcode.eu
*  Github: https://github.com/Krzysztof-Krol
*  Licence: GNU GPL v3
*}

{include file="head.tpl"}

  {* All books in library *}
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
                      <table class="table table-sm table-light table-striped">
                        <thead>
                          <tr>
                            <th scope="col d-none"></th>
                            <th scope="col">{$recent.head.name}</th>
                            <th scope="col">{$recent.head.date}</th>
                            <th scope="col">{$recent.head.date_return}</th>
                          </tr>
                        </thead>
                        <tbody>
                          {* {$wylistowanie} *}
                        </tbody>
                      </table>
                    </div>
                  </div>
                </main>
              </div> <!-- /col -->
            </div> <!-- /row -->
          </div> <!-- /col -->

          {include file="nav.tpl"}

      </div> <!--/row-->
  </div> <!-- /container -->

{include file="footer.tpl"}
