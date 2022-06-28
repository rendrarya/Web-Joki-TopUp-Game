<?php include "header.php";
$id = $_GET['id'];
$bek  = $conn->query("select * from data where id='$id'");
$row = mysqli_fetch_array($bek);
?>
<div class="class">
<a>Edit Produk</br>
<form action="index.php" method="post" enctype="multipart/form-data">

<input type="hidden" name="submit" value="update">
    <input type="hidden" value="<?php echo $row['id'];?>" name="id_bek">
    <input type="hidden" name="submit" value="update">
        <table>
        	<tr>
				<td>Gambar </td>
				<td style = "position: relative; left: 50px;"><input type="file" name="image"></td>					
			</tr>
			<tr>
				<td>Nama Game</td>
				<td><input type="text" name="title"></td>					
			</tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>			
			</tr>
		</table>
</form>
</div>