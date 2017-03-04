<section class="section-header" id="<?php echo strtolower($data->title())?>" data-scroll-index="0">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-6 left-content-wrapper">
        <h2 class="section-title title-header-nomargin title-header-mobile">
          <?php echo $data->titleHeader1()->html() ?>
        </h2>
        <h2 class="section-title title-header-mobile">
          <?php echo $data->titleHeader2()->html() ?>
        </h2>
        <p>
          <?php echo $data->text()->kirbytext() ?>
        </p>
      </div>
      <div class="col-md-7 col-sm-6">
        <img src="<?php echo $data->image($data->imgHeader())->url()?>" alt="<?php echo $data->altText()?>" class="img-responsive full-width">
      </div>
    </div>
  </div>
</section>
