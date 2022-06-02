<?php 
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] != NUll) {
	unset($_SESSION['username']);
    unset($_SESSION['password']);
    echo '<script language="javascript">window.location="index.php";</script>';
}
?>