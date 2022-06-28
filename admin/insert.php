<?php
include "header.php"
?>
       
<div class="row">
  <div class="column">
  <div class="class">
  
    <a>Game Baru</a>
    <table>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <tr>
        <input type="text" name="bek" value="insert"></tr>	
          <tr>
            <td>Gambar </td>
            <td style = "position: relative; left: 50px;"><input type="file" name="image"></td>					
          </tr>
          <tr>
            <td>Nama Game</td>
            <td><input type="text" name="title"></td>					
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
    </form>		
		</table> 
  </div>
  </div>
</div>
   

