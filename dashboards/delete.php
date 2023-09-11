<?php
session_start();
if(!isset($_SESSION['regno'])){
	header("Location: ../index.php");
}

include("../connection.php");

$post_id = $_GET['post_id'];
$query = "DELETE FROM post WHERE post_id = '$post_id'";
mysqli_query($con,$query);
?>
<script>
    alert("Warning: This post will be permanently deleted. Are you sure?");             
	window.location.href = "dcs_forum.php?yourArticles=#";
</script>