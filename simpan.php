<?php
if (isset($_POST['catatan'])) {
	$catatan = $_POST['catatan'];
	$file = 'catatan.txt';

	file_put_contents($file, $catatan);

	//pesan berhasil disimpan
	echo('catatan berhasil ditambahkan');
}
?>