<?php

	require_once("soporte.php");
	$auth->logout();
	header("Location:inicio.php");exit;