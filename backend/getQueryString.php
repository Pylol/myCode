<?php
	$bookId = $_GET['book_ID'];
	session_start();
	$_SESSION['book_ID'] = $bookID;
?>