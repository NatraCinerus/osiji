<section class="section-download text-center" id="<?php echo strtolower($data->title())?>" data-scroll-index="3">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2 class="section-title">
          <?php echo $data->titleDownload()->html() ?>
        </h2>
        <?php echo $data->text()->kirbytext() ?>
        <img src="<?php echo $data->image($data->imgDownload())->url()?>" class="img-responsive center-block icon-download">
        <a class="btn btn-default btn-download" href="<?php echo $data->urlDownload()?>" target="_blank"><?php echo $data->txtButton() ?></a>
      </div>
    </div>
  </div>
</section>
