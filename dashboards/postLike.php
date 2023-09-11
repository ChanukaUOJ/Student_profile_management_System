<?php
session_start();
if(!isset($_SESSION['regno'])){
	header("Location: ../index.php");
}
include("../connection.php");

$post_id = $_GET['post_id'];
$previousLikequery = "SELECT post_like FROM post WHERE post_id='$post_id'";
$previouslike = mysqli_query($con,$previousLikequery);
$like = mysqli_fetch_assoc($previouslike);
$likeIncrement = $like['post_like'];
$likeIncrement++;

$newLikequery = "UPDATE post SET post_like = '$likeIncrement' WHERE post_id = '$post_id'";
mysqli_query($con,$newLikequery);
?>

<script>
	window.location.href = "dcs_forum.php";
</script>