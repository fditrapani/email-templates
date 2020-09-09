<?php
	function renderStyles(){
		$color = include("colors.php");
		$styles = <<<EOD
			<!--[if lt IE 8]>
				<style>
				.contentContainer{
				  width: 600px;
				}
				</style>
			<![endif]-->

			<style type="text/css">
				@media only screen and (min-width: 600px) {
					.contentContainer {
						margin-top: 40px;
					}

					.contentCard {
						padding-left: 20px;
						padding-right: 20px;
					}
				}

				.text-link:hover {
					text-decoration: none;
				}

				.text-link:active {
					text-decoration: underline;
				}

				.primary-button a:hover,
				.primary-button a:hover font  {
					background: $color[black] !important;
					border-color: $color[black] !important;
					color: $color[white] !important;
				}

				.primary-button:hover,
				.primary-button:active {
					border-color: $color[white] !important;
				}

				.primary-button a:active,
				.primary-button a:active font {
					background: $color[link] !important;
					border-color: $color[link] !important;
					color: $color[white] !important;
				} 
			</style>
		EOD;

		return $styles;
	}
?>