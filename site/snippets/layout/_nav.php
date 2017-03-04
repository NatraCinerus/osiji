<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="<?php echo $site->image($site->logoImg())->url()?>" alt="Logo <?php echo $site->title()?>" class="img-responsive logo-img"></a>
    </div>
    <div id="menu" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <?php $datanav=0 ?>
        <?php foreach($pages->visible() as $menu): ?>
          <li><a href="#<?php echo strtolower($menu->title())?>" data-scroll-nav="<?php echo $datanav?>"><?php echo $menu->title() ?></a></li>
          <?php $datanav++ ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>
