<?php
  $sql_sua_sinhvien = "SELECT * FROM tbl_student WHERE Stu_ID='$_GET[Stu_ID]' LIMIT 1";
  $query_sua_sinhvien =  mysqli_query($mysqli,$sql_sua_sinhvien);
?>
<h2 style="font-weight: bold;">ADJUST STUDENT FPT - CHỈNH SỬA THÔNG TIN STUDENT</h2>
<h3 style="font-weight: bold;" >KHI BẠN ĐIỀN THÔNG TIN ĐỒNG NGHĨA BẠN ĐÃ ĐỌC VÀ CHẤP NHẬN NHỮNG ĐIỀU KHOẢN SAU ĐÂY:</h3>
<p>1) Đồng ý cung cấp vị trí tương đối của bản thân (Thay vì vị trí 88 Lê Lai bạn hãy cung cấp vị trí 70 Lê Lai)</p>
<p>2) Đồng ý cung cấp cung cấp các thông tin liên lạc cơ bản như : SĐT, Link Facebook và Hình ảnh để Driver nhận diện.</p>
<p>3) Đồng ý với quy tắc của F-Grab : Đây là ứng dụng kết nối, sẽ có thể xuất hiện nhưng rủi ro khi kết nối ví dụ như : Driver tự ý hủy chuyến, Driver có ý đồ xấu với Student. F-Grab khuyến khích bạn nên có dụng cụ phòng thân, cũng như quay vid làm chứng để cùng F-Grab xử lý</p>
<table border= "1" width="50%" style="border-collapse: collapse;" >
<?php
while ($row = mysqli_fetch_array($query_sua_sinhvien)) {
?>
<form method="POST" action="module/quanlyhocsinh/xuly.php?Stu_ID=<?php echo $row['Stu_ID']?>" enctype="multipart/form-data" > 
  <tr>
    <td>Ten sinh vien</td>
    <td><input type="text" value="<?php echo $row['Stu_Name'] ?>" name="Stu_Name" style=" background: #000000; width: 97%; color: white;" ></td>
  </tr>
  <tr>
   <td>Student's gender (Male/Female)</td>
   <td><input type="text"   value="<?php echo $row['Stu_Gender'] ?>"  name="Stu_Gender" style=" background: #000000; width: 97%; color: white;" ></td>
  </tr>
  <tr>
   <td>Dia chi sinh vien</td>
   <td><input type="text"  value="<?php echo $row['Stu_Address'] ?>" name="Stu_Address" style=" background: #000000; width: 97%; color: white;" ></td>
  </tr>
  <tr>
   <td>Phone Number sinh vien</td>
   <td><input type="text"  value="<?php echo $row['Stu_Phone_Number'] ?>" name="Stu_Phone_Number" style=" background: #000000; width: 97%; color: white;" ></td>
  </tr>
  <tr>
   <td>Image sinh vien (Yêu cầu có face)</td>
   <td>
    <input type="file" name="Stu_Img" style=" background: #000000; width: 97%; color: white;" >
    <img src="module/quanlyhocsinh/upload/<?php echo $row['Stu_Image'] ?>" width="150px">
  </td>
  </tr>
   <tr>
   <td>Link Facebook sinh vien</td>
   <td><input type="text"  value="<?php echo $row['Stu_Link'] ?>"  name="Stu_Link" style=" background: #000000; width: 97%; color: white;" ></td>
  </tr>
  <tr>
   <td>FPTCode</td>
   <td><input type="text"  value="<?php echo $row['Stu_FPTCode'] ?>" name="Stu_FPTCode" style=" background: #000000; width: 97%; color: white;" ></td>
  </tr>
  <tr>
   <td>Introduction & Schedule want to hitchhiking to FPT</td>
   <td><textarea rows="5"  type="text" name="Stu_Intro" style=" resize: none; background: #000000; width: 97%; color: white;" ><?php echo $row['Stu_Intro'] ?></textarea></td>
  </tr>

 
 
   <tr>
   <td colspan="2"><input type="submit" name="suasinhvien" value="ADJUST INFORMATION" style="    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;width: 100%;" ></td>
  </tr>
 </form>
 <?php
 }
 ?>
</table>