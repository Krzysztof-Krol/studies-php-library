<div class="col-md-3 p-5 pb-0 border-delicate h-100 bg-white position-relative overflow-auto">
  <aside class="">
    <nav>
      {* Navigation for all users *}
      <span class="h4">Report generator</span>
      <ul class="nav flex-column mt-3">
        <li class="nav-item"><a href="{$nav.link.home}" class="nav-link">{$nav.home}</a></li>
        <li class="nav-item"><a href="{$nav.link.new}" class="nav-link">{$nav.new}</a></li>
        <li class="nav-item"><a href="{$nav.link.all}" class="nav-link">{$nav.all}</a></li>
        <li class="nav-item"><a href="{$nav.link.my}" class="nav-link">{$nav.my}</a></li>
      {* Navigation for admin only *}
      <span class="h4 mt-5">Admin panel</span>
      <ul class="nav flex-column mt-2">
        <li class="nav-item"><a href="{$nav.link.users}" class="nav-link">{$nav.users}</a></li>
        <li class="nav-item"><a href="{$nav.link.categories}" class="nav-link">{$nav.categories}</a></li>
        <li class="nav-item"><a href="{$nav.link.settings}" class="nav-link">{$nav.settings}</a></li>
    </nav>
  </aside>
  <div class="position-absolute footer pl-3 pr-3">
    <footer class="w-100 p-3 bg-white text-right border-top-delicate">
      <a class="text-dark" href="{$author.website}">{$author.domain}</a><br>
      <span class="text-dark">{$author.like_it}</span>
      <a href="{$author.donate.link}">{$author.donate.encouragement}</a>
      <span class="text-dark">{$author.smile}</span>
    </footer>
  </div>
</div> <!-- /col -->
