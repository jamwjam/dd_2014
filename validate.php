<?php

/*
 * To change this template use Tools | Templates.
 */

	$_POST['username'];
	$_POST['password'];
	
	$password = "password";

	$hash = password_hash($password, PASSWORD_BCRYPT);

    if (password_verify('password', $hash)) {
        echo 'Password is valid!';
    } else {
        echo 'Invalid password.';
    }
?>