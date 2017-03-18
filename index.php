<?php
	if (isset($_POST['url'])) {
		$urls = file_get_contents("urls.json");
		$urls = json_decode($urls, true);
		
		$random = substr(sha1(microtime()), 0, 9);
		
		if (!isset($urls[$random])) {
			$urls[$random] = $_POST['url'];
			
		}
		file_put_contents('urls.json', json_encode($urls));
		echo "Your Short Url Is: localhost/url.php?url={$random}";
	}
?>




<!DOCTYPE html>
<html>
<head>
	<title>LinkNow</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="url" placeholder="URL here" />
		<input type="submit">
</body>
</html>
