<?php
	if (isset($_POST['comment'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];
		$newComment = $name.("; ").$email.("; ").$comment;

		$file = uniqid().(".txt");
		file_put_contents($file, $newComment);
		echo("added comment success");
	}
?>