<div class="container d-flex flex-column m-auto">
  <main class="">
    <div class="row m-auto w-100">
      <div class="col-md-6 m-auto">
        <h1 class="h1">{$title}</h1>
        <span class="d-block mb-4 text-secondary">{$author}</span>
        <div class="card">
          <div class="card-body">

            {* Login form *}
            <form class="form" role="form" autocomplete="off" id="form-login" method="POST">
              <input type="text" placeholder="Username" class="form-control mb-3 bg-light" name="uname1" id="uname1" required="required">
              <input type="password" placeholder="Password" class="form-control mb-3 bg-light" id="pwd1" required="required">
              <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
            </form>

          </div> <!--/card-block-->
        </div> <!-- /form card login -->
      </div> <!-- /col -->
    </div> <!--/row-->
  </main>
</div> <!-- /container -->
