<?php include "../koneksi.php";
$id = $_GET['id'];
$conn->query("DELETE from data  WHERE id='$id'");
header("location: index.php");
?>
