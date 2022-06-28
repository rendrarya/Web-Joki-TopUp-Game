<?php
session_start();
if($_SESSION['username']) {
} else {
    header("Location: login.php");
}
?>
<?php include 'header.php'; ?>
<?php include '../footer.php'; ?>
    
<?php

if($_POST["bek"] == 'insert') {
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $title = $_POST['title'];
    $image = $_FILES["image"]["name"];
    $conn->query("INSERT INTO data set title='$title', gambar='$image'");
 }
if(isset($_POST["submit"]) && $_POST["submit"] == 'update') 

if($_POST["submit"] == 'update'){
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $title = $_POST['title'];
    $gmb = $_FILES["image"]["name"];
    $id = $_POST['id_bek'];
    $conn->query("UPDATE data set title='$title', gambar='$gmb' WHERE id='$id'");
}
$posts = $conn->query("SELECT * FROM data");
?>

<?php
while($post = $posts->fetch_object()) {
 ?>

    <div class="card-row">
        <a href="../window_topup.php">
        <div class="card-column">
            <div class="class">
                <img src ="../img/<?php echo $post->gambar ?>"width= "100%">
                <h3><?php echo $post->title ?></h3>
                <a class="btn" style = "background-color: rgb(255, 170, 0);" href="update.php?id=<?php echo $post->id ?>">Edit</a>
                <a class="btn" style = "background-color: rgb(255, 170, 0);" href="delete.php?id=<?php echo $post->id ?>" onclick ="return confirm('Yakin mau dihapus?')">Delete</a>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
