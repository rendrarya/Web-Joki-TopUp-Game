
<?php include 'header.php'; ?>
<?php include 'footer.php'; ?>
    <?php $posts = $conn->query("SELECT * FROM data");
    while($post = $posts->fetch_object()) {
    ?> 
    <div class="card-row">
        <a href="window_topup.php">
        <div class="card-column">
            <div class="class">
                <div><img src ="img/<?php echo $post->gambar ?>"width= "100%">
                <h3><?php echo $post->title ?></h3>
            </div>
        </div>
    </div>
    <?php
    }
    ?>

<div id="mySidenav" class="side">
<a href="index.php">HOME</a>
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="about.php">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
  <a href="admin">Admin</a>
