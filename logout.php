<?php

	session_start();
	session_destroy();
	header('Location: http://localhost/Airline_reservation/index.php');

?>