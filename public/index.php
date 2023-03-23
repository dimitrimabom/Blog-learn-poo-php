<?php

	use App\Autoloader;

	use App\Database;

	require '../app/Autoloader.php';

	Autoloader::register();

	if (isset($_GET['p'])) {
		$p = $_GET['p'];
	} else {
		$p = 'home';
	}



	$db = new Database('blog');

	ob_start();

	switch ($p) {
		case 'home':
			require '../pages/home.php';
			break;
		case 'single':
			require '../pages/single.php';
			break;
		
		default:
			require '../pages/home.php';
			break;
	}

	$content = ob_get_clean();

	require '../pages/templates/default.php'
?>