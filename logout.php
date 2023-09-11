<?php
session_start();
if(isset($_SESSION['userName'])){
	session_destroy();
	?>
		<script>
			window.location.href = "../index.php";
		</script>
	<?php
	exit;
}else{
	header("Location: index.php");
}
?>
