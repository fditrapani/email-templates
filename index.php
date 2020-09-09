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
				1 => '<a href="expired.php" class="text-link">' . renderRegularText("Expired plan") . '</a>',
				2 => '<a href="expiring-plan.php" class="text-link">' . renderRegularText("Expiring plan") . '</a>',
				3 => '<a href="expiring-domain.php" class="text-link">' . renderRegularText("Expiring domain") . '</a>',
				4 => '<a href="expiring-subscriptions.php" class="text-link">' . renderRegularText("Expiring subscriptions") . '</a>',
				5 => '<a href="missing-payment-info.php" class="text-link">' . renderRegularText("Missing payment information") . '</a>',
				6 => '<a href="pre-renewal.php" class="text-link">' . renderRegularText("Pre-renewal") . '</a>',
				7 => '<a href="expiring-card.php" class="text-link">' . renderRegularText("Expiring card") . '</a>',  
				8 => '<a href="renewal-failure.php" class="text-link">' . renderRegularText("Renewal failure") . '</a>',
				9 => '<a href="refund.php" class="text-link">' . renderRegularText("Refund") . '</a>',
				10 => '<a href="updated-billing-info.php" class="text-link">' . renderRegularText("Updated billing information") . '</a>',
				11 => '<a href="cancelled-plan.php" class="text-link">' . renderRegularText("Cancelled plan") . '</a>', 
				12 => '<a href="cancelled-subscriptions.php" class="text-link">' . renderRegularText("Cancelled subscription") . '</a>',
				12 => '<a href="suspended.php" class="text-link">' . renderRegularText("Suspended site") . '</a>',
		), "checkmark");

		echo renderEmailTemplate( "Email templates", $listOfPages . renderVerticalSpacer("30px"), false );
	?>
</body>
</html>