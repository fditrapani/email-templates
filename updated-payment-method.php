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
		$horizontalRule = renderHorizontalRule();
		$creditCard = renderItem(
			"VISA ending in 4020",
			$color["success"],
			"Added",
			"Filippo Di Trapani",
			false,
			true
		);
		$product = renderItem(
			"WordPress.com Personal",
			$color["lightText"],
			"Renews for C$60 on July 3, 2021",
			"Plan for " . renderTextLink("Filippo Di Trapani"),
		);		
		
		$verticalSpacer = renderVerticalSpacer( "40px" );
		$halfVerticalSpacer = renderVerticalSpacer( "20px" );
		
		$billingContent = renderBillingHistory();
		
		$recentPurchaseTitle = renderBoldText("Recently renewed");
		$recentPurchaseDetails = renderItem( 
			"filippodt.com", 
			$color['success'],
			"Renewed for $20 on July 22, 2020",
			".com domain registration" );

		$supportContent = renderSupport();

		$content = <<<EOD
			$horizontalRule
			$halfVerticalSpacer
			$creditCard
			$halfVerticalSpacer
			$horizontalRule
			$halfVerticalSpacer
			$product
			$halfVerticalSpacer
			$horizontalRule
			$verticalSpacer
			
			$billingContent

			$supportContent
		EOD;

		echo renderEmailTemplate( "You updated your billing details", $content );
	?>
</body>
</html>