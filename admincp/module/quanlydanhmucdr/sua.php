<?php
  $sql_sua_danhmucdr = "SELECT * FROM tbl_driver WHERE Dri_IDE='$_GET[Dri_IDE]' LIMIT 1";
  $query_sua_danhmucdr =  mysqli_query($mysqli,$sql_sua_danhmucdr);
?>
<p>Sua danh muc driver</p>
<table border= "1" width="50%" style="border-collapse: collapse;" >
<form method="POST" action="module/quanlydanhmucdr/xuly.php?Dri_IDE=<?php echo $_GET['Dri_IDE']?>" > 
  <?php
  while($dong = mysqli_fetch_array( $query_sua_danhmucdr)) {
  
  ?>
  <tr>
    <td>Ten driver</td>
    <td><input type="text" name="tendriver" value="<?php echo $dong['Dri_Name']?>"  ></td>
  </tr>
  <tr>
   <td>Dia chi driver</td>
   <td><input type="text" name="diachi" value="<?php echo $dong['Dri_Address']?>" ></td>
  </tr>
  <tr>
   <td>Phone Number driver</td>
   <td><input type="text" name="phonenumber" value="<?php echo $dong['Dri_Phone_Number']?>"  ></td>
  </tr>
  <tr>
   <td>Link Avatar Facebook Image driver</td>
   <td><input type="text" name="linkimg" value="<?php echo $dong['Dri_Image']?>" ></td>
  </tr> 
  <tr>
   <td>FPTCode</td>
   <td><input type="text" name="fptcode" value="<?php echo $dong['Stu_FPTCode']?>" ></td>
  </tr>
   <tr>
   <td colspan="2"><input type="submit" name="suadanhmuc" value="sua danh muc driver" ></td>
  </tr>
  <?php 
  }
  ?>
 </form>
</table>