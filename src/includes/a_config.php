<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/blog.php":
			$CURRENT_PAGE = "Blog"; 
			$PAGE_TITLE = "Blog";
			break;
		
#Config_content#
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Hamza Sayed-Ali";
	}
?>