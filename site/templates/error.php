<?php snippet('layout/head') ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <img src="<?php echo $site->image($site->logoImg())->url()?>" alt="<?php echo $site->title()?>" class="img-responsive center-block">
      </div>
      <div class="col-sm-12 text-center">
        <h1>404 Error</h1>
        <p>Sorry, the page you are looking for is not found</p>
        <a href="<?php echo $site->url()?>">Back to Home</a>
      </div>
    </div>
  </div>
</section>
<?php snippet('layout/footer') ?>
