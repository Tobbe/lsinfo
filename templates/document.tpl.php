<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<title><?php e($title); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<meta name="Language" content="English, en-us">
	<meta name="Author" content="Darrin C. Roenfanz">
	<meta name="Author" content="Tobbe Lundberg">
	<meta name="Robots" content="index,follow">
	<meta name="Description" content="LiteStep information">

	<meta name="Keywords" content="LiteStep, litestep, LS, ls">

	<link rel="stylesheet" href="base.css" type="text/css" media="screen">
	<link rel="stylesheet" href="layout.css" type="text/css" media="screen">
<?php foreach ($styles as $style): ?>
	<link rel="stylesheet" href="<?php e($style); ?>">
<?php endforeach; ?>
<?php foreach ($scripts as $script): ?>
	<script type="text/javascript" src="<?php e($script); ?>"></script>
<?php endforeach; ?>
<?php foreach ($onload as $javascript): ?>
	<script type="text/javascript">
		<?php echo $javascript; ?>
	</script>
<?php endforeach; ?>
</head>
<body>
	<?php echo $content; ?>
</body>
</html>
