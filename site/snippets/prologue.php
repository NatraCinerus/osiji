<section class="section-prologue" id="<?php echo strtolower($data->title())?>" data-scroll-index="1">
  <div class="container">
    <div class="card-style">
      <div class="row">
        <div class="col-md-5">
          <img src="<?php echo $data->image($data->imgPrologue())->url()?>" alt="<?php echo $data->altText()?>" class="img-responsive full-width img-marbot">
        </div>
        <div class="col-md-7">
          <h2 class="section-title">
            <?php echo $data->titlePrologue()->html() ?>
          </h2>
          <?php echo $data->text()->kirbytext() ?>
        </div>
      </div>
    </div>
  </div>
</section>
