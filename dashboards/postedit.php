<?php 
session_start();
if(!isset($_SESSION['regno'])){
	header("Location: ../index.php");
}
include("../connection.php");

$post_id = $_GET['post_id'];
$query = "SELECT post_title,post_description, post_image_path FROM post WHERE post_id='$post_id'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/5868934a40.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/editprofileandpost.css?=<?php echo time() ?>">
    <title><?php echo $row['post_title'];?></title>
</head>

<body>

    <!-- post your article -->
    <div class="postarticleform" id="postarticleform">


        <form action="../upload.php" method="POST" enctype="multipart/form-data">

            <div class="addposttitle">
                <h1>Add Your Post</h1>
            </div>

            <input type="hidden" name="postId" value="<?php echo $post_id;?>">

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Post Title" name="title"
                        value="<?php echo $row['post_title'];?>" required>
                    <label for="floatingInputGrid">Post Title</label>
                </div>


            </div>
            <div class="input-group mb-3">
                <div class="form-floating">
                    <textarea type="text" class="form-control" id="floatingInputGrid" name="description"
                        required style="height: 380px"><?php echo $row['post_description'];?></textarea>
                    <label for="floatingInputGrid">Type your description...</label>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="file" class="form-control" id="floatingInputGrid" name="fileToUpload" value=""
                        required>
                    <label for="floatingInputGrid">Image</label>
                </div>
            </div>

            <div class="col-auto postbutton">
                <button type="submit" class="btn btn-primary mb-3" name="update">Post</button>
            </div>

        </form>
    </div>
    <!-- post your articles -->

</body>

</html>