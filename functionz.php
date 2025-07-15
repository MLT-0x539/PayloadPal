<?php
  error_reporting(0);
	function dbms_connect() {
		global $db_conn;              
		$db_conn = mysqli_connect("localhost", "ub3r_d4t4b4s3uz3r!", "l4m3_5up3r53kr1tp4zzw0rd1337?", "m4i355QL321~");

		if (mysqli_connect_errno()) { /
			printf("Connection Failed: %s\n" mysqli_connect_error());
		}
	}	
	
	function redirector() {
		header("Location: core.php");
	}
?>
