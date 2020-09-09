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
			"Refunded",
			"You will receive your refund in 7-10 business days.",
			false,
			true
		);
		$product = renderItem(
			"WordPress.com Personal",
			$color["error"],
			"Removed",
			"Plan for " . renderTextLink("Filippo Di Trapani"),
			false,
			true
		);
		
		
		
		$verticalSpacer = renderVerticalSpacer( "40px" );
		$halfVerticalSpacer = renderVerticalSpacer( "20px" );
		$featureTitle = renderSecondaryTitle( "Miss us already?" );
		$featureList = renderUnorderedList( array( 
				1 => renderRegularText("Ability to set filippodt.com as your primary address."), 
				2 => renderRegularText("Remove WordPress.com ads from your site."),
				3 => renderRegularText("Access to live chat when you need immediate support."),
				4 => renderRegularText("Increased storage space for your photos, audio files, or videos."), 
		), "checkmark");

		$button_cta = renderRegularText("Add another year for both", $color["white"], "14px");
		$button = renderPrimaryButton( $button_cta );


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

			$featureTitle
			$featureList
			$halfVerticalSpacer
			$button
			$verticalSpacer
								
			$supportContent
		EOD;

		echo renderEmailTemplate( "Your purchase has been refunded", $content );
	?>
</body>
</html>