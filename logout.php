<?php

	if ($_SESSION['userEmail'] == "")
    {
        header('location:index.php');
    }

	session_start();

	session_destroy();

	header('location:index.php');

?>