<section class="section-logo text-center" id="<?php echo strtolower($data->title())?>" data-scroll-index="3">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2 class="section-title">
          <?php echo $data->titleDownload()->html() ?>
        </h2>
        <?php echo $data->text()->kirbytext() ?>
      </div>
    </div>
        <div class="row">
        <?php foreach($data->downloadOption()->toStructure() as $downloadlist): ?>
          <div class="col-sm-4 bg-logo">
                <div class="wrapper-logo">
                  <div class="media-left">
                    <a href="<?php echo $downloadlist->listUrl()?>">
                      <img class="media-object" src="<?php echo $data->image($downloadlist->listDownloadImg())->url()?>" alt="<?php echo $downloadlist->listAltText()?>">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="font-logo text-left"><?php echo $downloadlist->listDownloadTitle()->html() ?></h4>
                    <a class="btn btn-default btn-logo pull-left" href="<?php echo $downloadlist->listUrl()?>" target="_blank">Download</a>
                  </div>
                </div>
          </div>
        <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
</section>