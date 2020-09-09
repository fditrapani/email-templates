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
			"filippodt.com",
			$color["error"],
			"Expires August 22, 2020",
			"Primary domain for <a href='#' class='text-link' style='color:" . $color["text"] . "'>" . renderRegularText("Filippo Di Trapani") . "</a>",
		);
		$button_cta = renderRegularText("Add another year for all", $color["white"], "14px");
		$button = renderPrimaryButton( $button_cta );
		
		$verticalSpacer = renderVerticalSpacer( "40px" );
		$halfVerticalSpacer = renderVerticalSpacer( "20px" );
		$featureTitle = renderSecondaryTitle( "Don’t lose out" );
		$featureParagraph = "<p style='margin-top: 0'>" . renderRegularText("Please note that if you choose not to renew:") . "</p>";
		$featureList = renderUnorderedList( array( 
				1 => renderRegularText("You will loose your claim to filippodt.com."), 
				2 => renderRegularText("Your domain will become available for other people to register."), 
				3 => renderRegularText("Vistors to") . " <a href='#'>" . renderRegularText("Filippo Di Trapani") . "</a> " . renderRegularText("will not get redirected to your site." ),
		), "warning");

		$billingContent = renderBillingHistory();
		
		$recentPurchaseTitle = renderBoldText("Recently renewed");
		$horizontalRule = renderHorizontalRule();
		$recentPurchaseDetails = renderItem( 
			"WordPress.com Personal", 
			$color['success'],
			"Renewed for $60 on July 22, 2020",
			renderRegularText("Plan for ") . " <a href='#'>" . renderRegularText("Filippo Di Trapani") . "</a> "  );

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

		echo renderEmailTemplate( "Your domain is about to expire", $content );
	?>
</body>
</html>