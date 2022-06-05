<?php 
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
		exit;
	}

	FUNCTION halamanAdmin(){
		if($_SESSION['level'] != 'admin'){
			header('Location: index.php?target=home');
		}
	}

// 
	// echo $_SESSION['username'];
?>