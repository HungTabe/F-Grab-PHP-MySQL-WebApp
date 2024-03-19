<?php
include('../../config/config.php');
$Stu_Name = $_POST['Stu_Name'];
$Stu_Gender = $_POST['Stu_Gender'];
$Stu_Address = $_POST['Stu_Address'];
$Stu_Phone_Number = $_POST['Stu_Phone_Number'];
//Xulyhinhanh
$Stu_Img = $_FILES['Stu_Img']['name'];
$Stu_Img_tmp = $_FILES['Stu_Img']['tmp_name'];
$Stu_Img = time().'_'.$Stu_Img;
$Stu_Link = $_POST['Stu_Link'];
$Stu_FPTCode = $_POST['Stu_FPTCode'];
$Stu_Intro = $_POST['Stu_Intro'];



if(isset($_POST['themsinhvien'])) {
	//Them
	$sql_them = "INSERT INTO tbl_student(Stu_Name,Stu_Gender,Stu_Address,Stu_Phone_Number,Stu_Image,Stu_Link,Stu_FPTCode,Stu_Intro) VALUE('".$Stu_Name."','".$Stu_Gender."','".$Stu_Address."','".$Stu_Phone_Number."','".$Stu_Img."','".$Stu_Link."','".$Stu_FPTCode."','".$Stu_Intro."')";
	mysqli_query($mysqli,$sql_them);	
	move_uploaded_file($Stu_Img_tmp,'upload/'.$Stu_Img);
	header('Location:../../index.php?action=quanlyhocsinh&query=them');
}elseif(isset($_POST['suasinhvien'])){
	//Sua
	if($Stu_Img!=''){
		move_uploaded_file($Stu_Img_tmp,'upload/'.$Stu_Img);
		$sql = "SELECT * FROM tbl_student WHERE Stu_ID='$_GET[Stu_ID]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row=mysqli_fetch_array($query)){
		unlink('upload/'.$row['Stu_Image']);
		}
		$sql_update = "UPDATE tbl_student SET Stu_Name='".$Stu_Name."', Stu_Gender='".$Stu_Gender."',Stu_Address='".$Stu_Address."', Stu_Phone_Number='".$Stu_Phone_Number."',Stu_Image='".$Stu_Img."',Stu_Link='".$Stu_Link."' ,Stu_FPTCode='".$Stu_FPTCode."', Stu_Intro='".$Stu_Intro."' WHERE Stu_ID='$_GET[Stu_ID]'";
		
	}else{
	$sql_update = "UPDATE tbl_student SET Stu_Name='".$Stu_Name."', Stu_Gender='".$Stu_Gender."',Stu_Address='".$Stu_Address."', Stu_Phone_Number='".$Stu_Phone_Number."',Stu_Link='".$Stu_Link."' ,Stu_FPTCode='".$Stu_FPTCode."', Stu_Intro='".$Stu_Intro."' WHERE Stu_ID='$_GET[Stu_ID]'";

	}
	mysqli_query($mysqli,$sql_update);	
	header('Location:../../index.php?action=quanlyhocsinh&query=them1');
	
	}else{
	$id=$_GET['Stu_ID'];
	$sql = "SELECT * FROM tbl_student WHERE Stu_ID='$id' LIMIT 1"  ;
	$query = mysqli_query($mysqli,$sql);
	while($row=mysqli_fetch_array($query)){
		unlink('upload/'.$row['Stu_Image']);
	}

	$sql_xoa = "DELETE FROM tbl_student WHERE Stu_ID='".$id."' ";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlyhocsinh&query=them1');
} 
?>
<!-- (isset($_GET['query'])=='xoa') -->