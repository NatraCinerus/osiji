<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="robots" content="index,follow" >
<meta name="keywords" content="<?php echo $site->keywords()->html() ?>" />
<meta name="description" content="<?php echo $site->description()->html() ?>" />
<meta name="author" content="<?php echo $site->author()->html() ?>">
<!-- Favicons -->
<?php if($image = $site->image($site->faviconImg())): ?>
  <link rel="shortcut icon" href="<?php echo $image->url() ?>">
<?php endif ?>
