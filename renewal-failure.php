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
		$verticalSpacer = renderVerticalSpacer( "40px" );
		$halfVerticalSpacer = renderVerticalSpacer( "20px" );

		$card = renderItem(
			"VISA ending in 4020",
			$color["error"],
			"Expires September 30, 2020",
			"Filippo Di Trapani",
			false,
		);

		$button_cta = renderRegularText("Change payment method", $color["white"], "14px");
		$button = renderPrimaryButton( $button_cta );

		$featureTitle = renderSecondaryTitle( "Don’t lose out" );
		$featureParagraph = "<p style='margin-top: 0'>" . renderRegularText("Please note that if we can’t process your payment, your upgrades will be removed from your site.") . "</p>";
		$product = renderItem(
			"WordPress.com Personal",
			$color["warning"],
			"Expires August 22, 2020",
			"Plan for <a href='#' class='text-link' style='color:" . $color["text"] . "'>" . renderRegularText("Filippo Di Trapani") . "</a>",
		);
		$domain = renderItem(
			"filippodt.com",
			$color["warning"],
			"Expires August 28, 2020",
			"Primary domain for <a href='#' class='text-link' style='color:" . $color["text"] . "'>" . renderRegularText("Filippo Di Trapani") . "</a>",
		);		
		

		$billingContent = renderBillingHistory();

		$supportContent = renderSupport();

		$content = <<<EOD
			$horizontalRule
			$halfVerticalSpacer
			$card
			$halfVerticalSpacer
			$horizontalRule
			$halfVerticalSpacer

			$button
			$verticalSpacer
			
			$featureTitle
			$featureParagraph
			$horizontalRule
			$halfVerticalSpacer
			$product
			$halfVerticalSpacer
			$horizontalRule
			$halfVerticalSpacer
			$domain
			$halfVerticalSpacer
			$horizontalRule
			$verticalSpacer

			$billingContent
			$supportContent
		EOD;

		echo renderEmailTemplate( "We were unable renew your upgrades", $content );
	?>
</body>
</html>