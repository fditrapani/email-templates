<html xmlns:v="urn:schemas-microsoft-com:vml">
<?php include("components.php") ?>
<?php include("styles.php") ?>
<?php include("colors.php"); ?>

<head>
	<title>WordPress.com</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="en-us">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="date=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="address=no">

		
</head>
<body bgcolor="<?php echo $color['background']; ?>" style="direction: ltr; background-color: <?php echo $color['background']; ?>; margin: 0; padding: 0;">
	<?php echo renderStyles() ?>	

	<?php
		$listOfPages = renderUnorderedList( array( 
				1 => '<a href="expired.php" class="text-link">' . renderRegularText("Expired") . '</a>',
				2 => '<a href="expiring.php" class="text-link">' . renderRegularText("Expiring") . '</a>' 
		), "checkmark");

		echo renderEmailTemplate( "Email templates", $listOfPages );
	?>
</body>
</html>