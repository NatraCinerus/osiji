<section class="section-concept" id="<?php echo strtolower($data->title())?>" data-scroll-index="2">
  <div class="container">
    <div class="card-style">
      <div class="row">
        <div class="col-md-5">
          <img src="<?php echo $data->image($data->imgConcept())->url()?>" alt="<?php echo $data->altText()?>" class="img-responsive full-width img-marbot">
        </div>
        <div class="col-md-7">
          <h2 class="section-title">
            <?php echo $data->titleConcept()->html() ?>
          </h2>
          <?php echo $data->text()->kirbytext() ?>
        </div>
      </div>

      <?php $b = 1 ?>
      <?php foreach($data->conceptOption()->toStructure() as $conceptList): ?>
        <div class="wrapper">
          <div class="row list-concept">
            <div class="col-sm-4">
              <img src="<?php echo $data->image($conceptList->listConceptImg())->url()?>" alt="<?php echo $conceptList->listConceptTitle()?>" class="img-responsive center-block">
            </div>
            <div class="col-sm-1 hidden-xs">
              <p class="icon-number"><?php echo $b ?></p>
            </div>
            <div class="col-sm-7">
              <div class="content-concept-wrapper">
                <h3>
                  <?php echo $conceptList->listConceptTitle()->html() ?>
                </h3>
                <?php echo $conceptList->listConceptText()->kirbytext() ?>
              </div>
            </div>
          </div>
        </div>
        <?php $b++ ?>
      <?php endforeach ?>
    </div>
  </div>
</section>
