<?php
/* =======================================
Layout
========================================= */
function renderVerticalSpacer( $size = "20px" ) {	
	$verticalSpace = <<<EOD
		<!-- VerticalSpacer start -->
			<table width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td style="padding: 0" height="$size">&nbsp;</td>
				</tr>
			</table>
		<!-- VerticalSpacer end -->
	EOD;

	return $verticalSpace;
}

function renderEmailTemplate( $title, $content ) {	
	$color = include("colors.php");
	$verticalSpacer = renderVerticalSpacer("40px");
	$halfVerticalSpacer = renderVerticalSpacer();
	$emailTitle = renderEmailTitle( $title );
	$footer = renderFooter();

	$emailTemplate = <<<EOD
		<!-- emailTemplate start -->
			<table width="100%" cellpadding="10" cellspacing="0" style="background: $color[background];" bgcolor="$color[background]">
					<td align="center">
						$halfVerticalSpacer

						<table width="100%" cellpadding="0" cellspacing="0" style="background: $color[white]; max-width: 600px;" bgcolor="$color[white]">
							<tr>
								<td>
									<table class="contentCard" width="100%" cellpadding="20" cellspacing="0">
										<tr>
											<td align="left">
												$halfVerticalSpacer
												<a href="https://wordpress.com">
													<img src="images/wordpress-logo.png" alt="WordPress.com logo" width="170" border="0"/>
												</a>
											</td>
										</tr>
										<tr>
											<td style="padding-top: 10px;">
												<!-- Email Title -->
												$emailTitle
												
												<!-- Email content start -->
												$content
												<!-- Email content end -->
											</td>
										</tr>

									</table>
								</td>
							</tr>
						</table>

						$verticalSpacer
						$footer
						
					</td>
				</tr>
			</table>
		<!-- emailTemplate end -->
	EOD;

	return $emailTemplate;
}

function renderTwoColumn( $leftColumn, $rightColumn) {
	$color = include("colors.php");
	
	$columns = <<<EOD
		<!-- emailTemplate start -->
			<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 20px">
				<tr valign="top">
					<td style="padding-right: 5px;">
						$leftColumn
					</td>
					<td align="left" style="padding-left: 5px;">
						$rightColumn
					</td>
				</tr>
			</table>
		<!-- emailTemplate end -->
	EOD;

	return $columns;
}


/* =======================================
Content
========================================= */
function renderEmailTitle( $title ) {	
	$emailTitle = <<<EOD
		<!-- emailTitle start -->
			<h1 style="margin-top:0; margin-bottom: 36px;">
				<font face="Helvetica, Arial, sans-serif" size="5" style="font-size:28px">
					$title
				</font>
			</h1>
		<!-- emailTitle end -->
	EOD;

	return $emailTitle;
}

function renderSecondaryTitle( $title ) {	
	$emailTitle = <<<EOD
		<!-- emailTitle start -->
			<h2 style="margin-top:0; margin-bottom: 15px;">
				<font face="Helvetica, Arial, sans-serif" size="4" style="font-size:19px; font-weight: normal;">
					$title
				</font>
			</h2>
		<!-- emailTitle end -->
	EOD;

	return $emailTitle;
}

function renderRegularText( $text, $textColor = "#353535", $fontSize = "16px"){
		$color = include("colors.php");

		$regularText = <<<EOD
		<font face="Helvetica, Arial, sans-serif" size="3" color="$textColor" style="font-size:$fontSize; line-height: 22px">$text</font>
		EOD;

	return $regularText;
}

function renderBoldText( $text, $textColor = "#353535" ){
		$color = include("colors.php");

		$boldText = <<<EOD
			<strong><font face="Helvetica, Arial, sans-serif" size="3" color="$textColor" style="font-size:16px; line-height: 22px">$text</font></strong>
		EOD;

	return $boldText;
}

function renderUnorderedList( $list, $icon ) {	
	$listOpen = '
		<table cellspacing="0" cellpadding="0" style="margin-bottom: 8px;">
			<tr valign="top">
				<td style="padding-top: 1px">
					<img src="/images/' . $icon . '.png" width="18px" height="18px"/>
				</td>
			<td style="padding-left: 5px">';
	$listItems = implode( "</td></tr></table>" . $listOpen , $list );
			
	$unorderedList = <<<EOD
		<!-- unorderedList start -->
		$listOpen
			$listItems
		</td></tr></table>
		<!-- unorderedList end -->
	EOD;

	return $unorderedList;
}

function renderItem( $itemTitle, $itemStatus, $itenStatusMessage, $itemDescription) {
	$color = include("colors.php");
	$title = renderBoldText( $itemTitle );
	$status = renderBoldText( $itenStatusMessage, $itemStatus );
	$description = renderRegularText( $itemDescription );

	$item = <<<EOD
		<!-- emailTemplate start -->
			<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 20px">
				<tr>
					<td>
						$title
					</td>
					<td align="right">
						$status
					</td>
				</tr>
				<tr>
					<td colspan="2">
						$description
					</td>
				</tr>
			</table>
		<!-- emailTemplate end -->
	EOD;

	return $item;
}

function renderPrimaryButton( $buttonCta ) {
	$color = include("colors.php");

	$button = <<<EOD
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td class="primary-button" bgcolor="$color[link]" style="border-radius: 3px">
					<a href="#" style="border-top: 10px solid $color[link]; border-bottom: 10px solid $color[link]; border-left: 40px solid $color[link]; border-right: 40px solid $color[link]; display:inline-block; text-decoration: none; border-radius: 3px; color: $color[white]; text-align: center">$buttonCta</a>
				</td>
			</tr>
		</table>
	EOD;

	return $button;
}

function renderTextButton( $text, $textColor = "#1282D6" ){
		$color = include("colors.php");

		$textButton = <<<EOD
			<a href="#" class="text-link"><strong><font face="Helvetica, Arial, sans-serif" size="2" color="$textColor" style="font-size:14px; line-height: 22px; text-transform: uppercase; letter-spacing: 0.7px">$text</font></strong></a>
		EOD;

	return $textButton;
}

function renderHorizontalRule() {
	$color = include("colors.php");

	return "<hr size='1' noshade color='$color[border]' />";
}

function renderSupport() {
	$color = include("colors.php");
	$verticalSpacer = renderVerticalSpacer( "40px" );
	$halfVerticalSpacer = renderVerticalSpacer( "20px" );
	$horitontalLine = renderHorizontalRule();
	$title = renderSecondaryTitle("Need help? No problem!", "center");
	$content = "<p style='max-width:400px;'>" . renderRegularText("Our Happiness Engineers are here to answer your questions & help you set up your site.") . "</p>";
	$buttonCta = renderTextButton("Contact support");

	$support = <<<EOD
		$horitontalLine
		$verticalSpacer

		<table cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td align="center">
					<img src="images/support.png" width="65px" />
					$halfVerticalSpacer
					$title
					$content
					$buttonCta					
				</td>
			</tr>
		</table>
	EOD;

	return $support;
}

function renderFooter() {
	$color = include("colors.php");
	$verticalSpacer = renderVerticalSpacer( "40px" );
	$halfVerticalSpacer = renderVerticalSpacer( "20px" );
	$mobileTitle = renderSecondaryTitle("Get the mobile app");
	$MobileContent = "<p style='max-width:350px;'>" . renderRegularText("View stats, create and edit posts, moderate comments, and upload media. ") . "</p>";
	$downloadMobileCTAs = renderTwoColumn( 
		"<div align='right'><a href='#'><img src='images/app-store.png' width='140px' border='0'/></a></div>", 
		"<a href='#'><img src='images/play-store.png' width='140px' border='0'/></a>" );

	$automatticDetails = "<a href='https://automattic.com' class='text-link' style='color: $color[link]'>" . renderRegularText( "Automattic, Inc.", "#1282D6" ) . "</a><br/>" .
	renderRegularText(  "60 29th St. #343, San Francisco, CA 94110 ", $color['link'], "14px" );

	$loveNote = renderRegularText( "Sent with <font color='$color[link]'>&hearts;</font> from your friends at WordPress.com",  );

	$footer = <<<EOD
		<table cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td align="center">
					$mobileTitle
					$MobileContent
					$downloadMobileCTAs
					$halfVerticalSpacer

					$automatticDetails
					$halfVerticalSpacer
					
					$loveNote
				</td>
			</tr>
		</table>
	EOD;

	return $footer;
}

?>