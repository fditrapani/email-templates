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
	<style type="text/css">
		<?php echo renderStyles() ?>	
	</style>

	<?php
		$product = renderItem(
			"WordPress.com Personal",
			$color["error"],
			"Expired Jul 2, 2020",
			"Plan for Filippo Di Trapani (<a href='#' class='text-link' style='color:" . $color["text"] . "'>" . renderRegularText("filippodt.wordpress.com") . "</a>)",
		);
		$button_cta = renderRegularText("Add another month for $3", $color["white"], "14px");
		$button = renderPrimaryButton( $button_cta );
		$verticalSpacer = renderVerticalSpacer( "40px" );
		$halfVerticalSpacer = renderVerticalSpacer( "20px" );
		$featureTitle = renderSecondaryTitle( "Don’t loose out" );

		$featureList = renderUnorderedList( array( 
				1 => renderRegularText("Ability to set filippodt.com as your primary address."), 
				2 => renderRegularText("Remove WordPress.com ads from your site."),
				3 => renderRegularText("Access to live chat when you need immediate support."),
				4 => renderRegularText("Increased storage space for your photos, audio files, or videos."), 
		), "warning");

		$billingHistoryTitle = renderSecondaryTitle( "Billing history" );

		$billingHistoryAccount = 
			renderBoldText( "Account" ) . "<br>" . 
			renderRegularText( "fditrapani" ) . "<br>" .
			"<a href='#' class='text-link' style='color:" . $color["text"] . "; text-decoration: none'>" . renderRegularText("filippodt@gmail.com") . "</a>" . "<br>" .
			" <a href='#' class='text-link' style='color:" . $color["text"] . "'>" . renderRegularText( "Manage account" ) . "</a>";
		
		$billingHistoryReceipt = renderBoldText("Receipt") . "<br>" .
			renderRegularText( "#19681643" ). "<br>" . 
			" <a href='#' class='text-link' style='color:" . $color["text"] . "'>" . renderRegularText( "View receipt" ) . "</a>";


		$billingContent = renderTwoColumn( $billingHistoryAccount, $billingHistoryReceipt);
		$supportContent = renderSupport();

		$content = <<<EOD
			$product
			$button
			$verticalSpacer
			
			$featureTitle
			$featureList
			$verticalSpacer

			$billingHistoryTitle
			$billingContent
			$halfVerticalSpacer

			$supportContent

			$halfVerticalSpacer
		EOD;

		echo renderEmailTemplate( "Your plan has expired", $content );
	?>
</body>
</html>