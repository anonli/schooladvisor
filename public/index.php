<?php

if ( isset($_GET["page"]) ) {
	$page = $_GET["page"];
}
else {
	$page = "home";
}

ob_start();

switch($page){

	case "home":
		require "../pages/home.php";
	break;

	case "search":
		require "../pages/search.php";
	break;

	default:
		echo "<br><center><p>La page '".$page."' n'existe pas !</p></center>";
	break;
}

$content = ob_get_clean();

require "../pages/templates/default.php";

?>