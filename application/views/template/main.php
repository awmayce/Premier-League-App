<!DOCTYPE html>
<html>
<head>
	<!-- Main head -->
	<title><?php echo "Premier | " . $title ?></title>
	<link rel="icon" href="<?php echo URL::site('../media/images/favicon.ico') ?>">

	<!-- Bootstrap CSS and jQuery-->
	<?php echo HTML::script('../../media/js/jquery.js'); ?>
	<?php echo HTML::style('../../media/css/bootstrap.min.css') ?>
	<!-- Custom CSS -->
	<?php echo HTML::style('../../media/css/style.css') ?>
</head>
<body>
	<!-- Navigation -->
	<?php echo $navigation ?>




	<?php echo $content ?>


	<!-- Bootstrap Core JavaScript -->
	<?php echo HTML::script('../../media/js/bootstrap.min.js'); ?>
	<?php echo HTML::script('../../media/js/custom.js'); ?>
</body>
</html>