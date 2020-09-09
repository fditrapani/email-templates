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

		$product = renderItem(
			"WordPress.com Personal",
			$color["error"],
			"Removed",
			"Plan for " . renderTextLink("Filippo Di Trapani"),
			false,
			true
		);
				
		$billingContent = renderBillingHistory();
		
		$whatHappenedTitle = renderSecondaryTitle("What happened");
		$whatHappenedText = "<p style='margin:0'>" . renderRegularText("Your recent purchase was disputed through your bank or credit card company and the original payment was reveresed. When this happens, the transaction is reported as unauthorized or fraudulent and we are fined $20 by our payment processor. ") . renderBoldText("While the charge is in dispute, your subscription has been suspended.") . "</p>";

		$howToContinueTitle = renderSecondaryTitle("How to continue using your subscription");
		
		$howToContinueOne = renderRegularText("1.");
		$howToContinueTwo = renderRegularText("2.");

		$howToContinueFirstBullet = renderRegularText("If the dispute was done recently, you might be able to cancel it with your bank. Once you’ve canceled the dispute, please reply to this email and we will assist you in restoring the subscription.");
		$howToContinueSecondBullet = renderRegularText("If you prefer not to cancel the dispute or it is too late, you will be refunded once the payment provider has completed the dispute resolution which can take up to 75 days. In this case, a $20 fee must be paid if you’d like to start a new subscription.");

		$refundTitle = renderSecondaryTitle("How to get a refund");
		$refundText = "<p style='margin:0'>" . renderRegularText("While the dispute is active, we do not have the option to issue a refund. If you no longer intend to use this subscription and would like a direct refund, please cancel the dispute through your bank or credit card so that we have the option to refund the charge. Once you have cancelled the dispute you can <a href='#' class='text-link'><font color='$color[text]'>cancel your subscription</font></a> and <a href='#' class='text-link'><font color='$color[text]'>request a refund</font></a>.") . "</p>";

		$supportContent = renderSupport();

		$content = <<<EOD
			$product
			$verticalSpacer
			
			$billingContent

			$whatHappenedTitle
			$whatHappenedText

			$verticalSpacer

			$howToContinueTitle
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr valign="top">
					<td width="20px">
						$howToContinueOne
					</td>
					<td>
						<p style="margin-top: 0; padding-bottom: 1em;">$howToContinueFirstBullet</p>
					</td>
				</tr>
				<tr valign="top">
					<td width="20px">
						$howToContinueTwo
					</td>
					<td>
						<p style="margin: 0">$howToContinueSecondBullet</p>
					</td>
				</tr>
			</table>

			$verticalSpacer

			$refundTitle
			$refundText
							
			$verticalSpacer

			$supportContent
		EOD;

		echo renderEmailTemplate( "Your subscription has been suspended", $content );
	?>
</body>
</html>