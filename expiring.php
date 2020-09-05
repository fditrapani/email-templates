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
			"Expires Aug 22, 2020",
			"Plan for Filippo Di Trapani (<a href='#' class='text-link' style='color:" . $color["text"] . "'>" . renderRegularText("filippodt.wordpress.com") . "</a>)",
		);
		$button_cta = renderRegularText("Add another month for $3", $color["white"], "14px");
		$button = renderPrimaryButton( $button_cta );
		$manageSubscriptionButton = renderTextButton( "Manage subscription" );
		$verticalSpacer = renderVerticalSpacer( "40px" );
		$halfVerticalSpacer = renderVerticalSpacer( "20px" );
		$featureTitle = renderSecondaryTitle( "Don’t loose out" );
		$featureParagraph = "<p style='margin-top: 0'>" . renderRegularText("Please note that if you choose not to renew, these features will be removed from your site.") . "</p>";
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
		
		$recentPurchaseTitle = renderSecondaryTitle("Recently renewed");
		$horizontalRule = renderHorizontalRule();
		$recentPurchaseDetails = renderItemVariant( 
			"filippodt.com", 
			".com domain registration",
			"Renewed for $20 on July 22, 2020",
			$color['success'] );

		$supportContent = renderSupport();

		$content = <<<EOD
			$product
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td style="padding-right: 16px;">
						$button
					</td>
					<td>
						$manageSubscriptionButton
					</td>
				</tr>
			</table>
			$verticalSpacer
			
			$featureTitle
			$featureParagraph
			$featureList
			$verticalSpacer

			$billingHistoryTitle
			$billingContent
			$halfVerticalSpacer
			
			$recentPurchaseTitle
			$recentPurchaseDetails
			$halfVerticalSpacer

			$supportContent
			$halfVerticalSpacer
		EOD;

		echo renderEmailTemplate( "Your plan is about to expire", $content );
	?>
</body>
</html>