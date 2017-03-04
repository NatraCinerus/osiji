<!DOCTYPE html>
<html lang="en">
<head>
  <?php snippet ('layout/_meta') ?>
  <title><?php echo $site->title()->html() ?></title>
	<?php snippet ('layout/_css') ?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php snippet ('layout/_nav') ?>
