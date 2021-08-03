<?php
	setcookie("email");
    setcookie("senha");
    session_destroy("user");
	header ("Location: inicio.html");
?>