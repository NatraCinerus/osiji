<?php

snippet('layout/head');

  foreach($pages->visible() as $section) {
    snippet($section->uid(), array('data' => $section));
  }

snippet('layout/footer');

?>
