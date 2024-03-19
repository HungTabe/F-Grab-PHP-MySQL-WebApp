
<?php
	$sql_lietke_danhmucdr = "SELECT * FROM tbl_driver ORDER BY Dri_IDE ASC";
	$query_lietke_danhmucdr =  mysqli_query($mysqli,$sql_lietke_danhmucdr);
?>
<p>Cac driver gần đây</p>
<table border= "1" width="100%" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
    <th>Ten driver</th>
    <th>Gioi tinh </th>
    <th>Dia chi</th>
    <th>So Dien Thoai</th>
    <th>Link Facebook</th>
    <th style="width: 20%;">Gioi thieu</th>
    <th>MSSV FPT</th>
    <th>Ten phuong tien</th>
    <th>Bien So</th>
    <th>ONLY FOR ADMIN</th>

  </tr>
  <?php
  $i=0;
  while($row = mysqli_fetch_array($query_lietke_danhmucdr)){
  	$i++;
  ?>
  <tr>
  	<td style="overflow-wrap: break-word;" ><?php echo $i ?></td>
  	<td style="overflow-wrap: break-word;" ><?php echo $row['Dri_Name'] ?></td>
    <td style="overflow-wrap: break-word;" ><?php echo $row['Dri_Gender'] ?></td>
  	<td style="overflow-wrap: break-word;" ><?php echo $row['Dri_Address'] ?></td>
  	<td style="overflow-wrap: break-word;" ><?php echo $row['Dri_Phone_Number'] ?></td>
  	<td style="overflow-wrap: break-word; max-width: 300px;" ><?php echo $row['Dri_Image'] ?></td>
  	<td style="overflow-wrap: break-word; max-width: 300px;" ><?php echo $row['Dri_Intro'] ?></td>
    <td style="overflow-wrap: break-word;" ><?php echo $row['Stu_FPTCode'] ?></td>
    <td style="overflow-wrap: break-word;" ><?php echo $row['Veh_Name'] ?></td>
    <td style="overflow-wrap: break-word;" ><?php echo $row['Veh_Number'] ?></td>
  	<td>
  		<a href="?action=quanlydanhmucdriver&query=sua&Dri_IDE=<?php echo $row['Dri_IDE'] ?>">Sua</a> | <a href="module/quanlydanhmucdr/xuly.php?Dri_IDE=<?php echo $row['Dri_IDE'] ?>">Xoa</a>
  	</td>
  </tr>
  <?php
  }
  ?> 

</table>