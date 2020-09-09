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
		$product = renderItem(
			"WordPress.com Personal",
			$color["error"],
			"Expires August 22, 2020",
			"Plan for <a href='#' class='text-link' style='color:" . $color["text"] . "'>" . renderRegularText("Filippo Di Trapani") . "</a>",
		);
		$button_cta = renderRegularText("Add another year for $60", $color["white"], "14px");
		$button = renderPrimaryButton( $button_cta );
		
		$verticalSpacer = renderVerticalSpacer( "40px" );
		$halfVerticalSpacer = renderVerticalSpacer( "20px" );
		$featureTitle = renderSecondaryTitle( "Don’t lose out" );
		$featureParagraph = "<p style='margin-top: 0'>" . renderRegularText("Please note that if you choose not to renew, these features will be removed from your site.") . "</p>";
		$featureList = renderUnorderedList( array( 
				1 => renderRegularText("Ability to set filippodt.com as your primary address."), 
				2 => renderRegularText("Remove WordPress.com ads from your site."),
				3 => renderRegularText("Access to live chat when you need immediate support."),
				4 => renderRegularText("Increased storage space for your photos, audio files, or videos."), 
		), "warning");

		$billingContent = renderBillingHistory();
		
		$recentPurchaseTitle = renderBoldText("Recently renewed");
		$horizontalRule = renderHorizontalRule();
		$recentPurchaseDetails = renderItem( 
			"filippodt.com", 
			$color['success'],
			"Renewed for $20 on July 22, 2020",
			".com domain registration" );

		$supportContent = renderSupport();

		$content = <<<EOD
			$product
			$halfVerticalSpacer
			$button
			$verticalSpacer
			
			$featureTitle
			$featureParagraph
			$featureList
			$verticalSpacer

			$billingContent
			
			$recentPurchaseTitle
			$horizontalRule
			$halfVerticalSpacer
			$recentPurchaseDetails
			$halfVerticalSpacer

			$supportContent
		EOD;

		echo renderEmailTemplate( "Your plan is about to expire", $content );
	?>
</body>
</html>