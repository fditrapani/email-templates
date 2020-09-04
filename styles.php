<?php
function renderStyles(){
	$color = include("colors.php");

	return ("
		@media only screen and (min-width: 600px) {
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
		.primary-button:hover  {
			background: $color[black] !important;
			border-color: $color[black] !important;
		}

		.primary-button:active,
		.primary-button a:active {
			background: $color[link] !important;
			border-color: $color[link] !important;
		} 
	");
}
?>