<?php
	require_once '../lib/db.php';

	function addCat($conn, $hoten, $email, $password, $ngaysinh, $gioitinh) {
	return db_query($conn, 
		" INSERT INTO `dangky` (`id`, `Hoten`, `email`, `password`, `ngaysinh`, `gioitinh`) VALUES (NULL, '$hoten', '$email', '$password', '$ngaysinh', '$gioitinh')";
	}
?>