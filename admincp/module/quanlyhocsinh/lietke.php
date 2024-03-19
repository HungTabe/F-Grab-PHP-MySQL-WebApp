
<?php
	$sql_lietke_hocsinh = "SELECT * FROM tbl_student ORDER BY Stu_ID ASC";
	$query_lietke_hocsinh =  mysqli_query($mysqli,$sql_lietke_hocsinh);
?>
<p>Liet ke cac student gần đây</p>
<table border= "1" width="100%" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
    <th>Ten student</th>
    <th>Gioi tinh</th>
    <th>Dia chi</th>
    <th>So Dien Thoai</th>
    <th>Hinh Anh</th>
    <th>Link Facebook/Insta</th>
    <th>MSSV FPT</th>
    <th>Introduction & Schedule want to hitchhiking to FPT </th>
    <th>Only for Admin </th>
    


  </tr>
  <?php
  $i=0;
  while($row = mysqli_fetch_array($query_lietke_hocsinh)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
  	<td><?php echo $row['Stu_Name'] ?></td>
  	<td><?php echo $row['Stu_Gender'] ?></td>
  	<td><?php echo $row['Stu_Address'] ?></td>
  	<td><?php echo $row['Stu_Phone_Number'] ?></td>
  	<td><img src="module/quanlyhocsinh/upload/<?php echo $row['Stu_Image'] ?>" width="150px"></td>
    <td style="max-width: 200px; overflow-wrap: break-word;"><?php echo $row['Stu_Link'] ?></td>
    <td><?php echo $row['Stu_FPTCode'] ?></td>
    <td><?php echo $row['Stu_Intro'] ?></td>
  	<td>
  		<a href="?action=quanlyhocsinh&query=sua&Stu_ID=<?php echo $row['Stu_ID'] ?>">Sua</a> | <a href="module/quanlyhocsinh/xuly.php?Stu_ID=<?php echo $row['Stu_ID'] ?>">Xoa</a>
  	</td>
  </tr>
  <?php
  }
  ?> 

</table>