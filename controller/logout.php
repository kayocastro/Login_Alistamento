<?php 

	session_start();

	include_once '../model/class/Conn.class.php';
	include_once '../model/class/Users.class.php';


	$users = new Users();

	$users->logout();

	header("location: ../index.php?access=session_ending");

 ?>