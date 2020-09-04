<?php
function renderStyles(){
	$color = include("colors.php");

	return ("
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