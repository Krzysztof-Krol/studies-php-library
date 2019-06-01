<div class="col-md-3 p-5 pb-0 border-delicate h-100 bg-white position-relative overflow-auto">
  <aside class="">
    <nav>
      {* Navigation for all users *}
      <span class="h4">{$nav.yours_account}</span>
      <ul class="nav flex-column mt-3">
        <li class="nav-item"><a href="{$nav.link.home}" class="nav-link">{$nav.home}</a></li>
        <li class="nav-item"><a href="{$nav.link.all}" class="nav-link">{$nav.all}</a></li>
      {* Navigation for admin only *}
      {* {if $user<0} *}
      <span class="h4 mt-5">{$nav.admin_account}</span>
      <ul class="nav flex-column mt-2">
        <li class="nav-item"><a href="{$nav.link.new}" class="nav-link">{$nav.new}</a></li>
        <li class="nav-item"><a href="{$nav.link.users}" class="nav-link">{$nav.users}</a></li>
        <li class="nav-item"><a href="{$nav.link.categories}" class="nav-link">{$nav.categories}</a></li>
        <li class="nav-item"><a href="{$nav.link.settings}" class="nav-link">{$nav.settings}</a></li>
      {* {/if} *}
    </nav>
  </aside>
  <div class="position-absolute footer pl-3 pr-3">
    <footer class="w-100 p-3 bg-white text-right border-top-delicate">
      <a class="text-dark" href="{$author.website}">{$author.domain}</a><br>
    </footer>
  </div>
</div> <!-- /col -->
