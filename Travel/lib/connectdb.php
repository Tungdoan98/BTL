<?php
	require 'config.php';

	function db_connect() {
		global $conf;
		$conn = mysqli_connect($conf["host"], $conf["user"], $conf["password"], $conf["db"])
			or die("Cannot connect to db");
		mysqli_set_charset($conn, "utf8");

		return $conn;
	}
	function db_query($conn, $str) {
		$result = mysqli_query($conn, $str);
		if(mysqli_errno($conn) > 0) {
			die("Error execute query: " . mysqli_error($conn));
		}
		
		return $result;
	}

	function db_single($conn, $str) {
		$result = db_query($conn, $str);
		$record = mysqli_fetch_assoc($result);
		return $record;
	}

	function db_escape_postparam($conn, $key) {
	return mysqli_real_escape_string($conn, $_POST[$key]);
	}

	function db_close($conn) {
		mysqli_close($conn);
	}
?>