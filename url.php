<?php
	if (isset($_GET['url'])) {
		$urls = file_get_contents("urls.json");
		$urls = json_decode($urls, true);
		
		if (isset($urls[$_GET['url']])) {
			$url = "http://{$urls[$_GET['url']]}";
			header("Location: {$url}");
		} else {
			header("Location: index.php");
		}
		
	}
?>
