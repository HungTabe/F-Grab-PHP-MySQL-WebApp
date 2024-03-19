<?php
include('../../config/config.php');
$tendriver = $_POST['tendriver'];
$diachi = $_POST['diachi'];
$phonenumber = $_POST['phonenumber'];
$linkimg = $_POST['linkimg'];
$fptcode = $_POST['fptcode'];
$introduction = $_POST['introduction'];
$vehname = $_POST['vehname'];
$vehcode = $_POST['vehcode'];
$gioitinh = $_POST['gioitinh'];
if(isset($_POST['themdanhmuc'])) {
	//Them
	$sql_them = "INSERT INTO tbl_driver(Dri_Name,Dri_Gender,Dri_Address,Dri_Phone_Number,Dri_Image,Dri_Intro,Stu_FPTCode,Veh_Name,Veh_Number ) VALUE('".$tendriver."', '".$gioitinh."' ,'".$diachi."','".$phonenumber."', '".$introduction."' ,'".$linkimg."','".$fptcode."','".$vehname."' ,'".$vehcode."' )";
	mysqli_query($mysqli,$sql_them);	
	header('Location:../../index.php?action=quanlydanhmucdriver&query=them');
}elseif(isset($_POST['suadanhmuc'])){
	//Sua
	$sql_update = "UPDATE tbl_driver SET Dri_Name='".$tendriver."', Dri_Address='".$diachi."', Dri_Phone_Number='".$phonenumber."', Dri_Image='".$linkimg."', Stu_FPTCode='".$fptcode."' WHERE Dri_IDE='$_GET[Dri_IDE]'";
	mysqli_query($mysqli,$sql_update);	
	header('Location:../../index.php?action=quanlydanhmucdriver&query=them');
}else{
	$id=$_GET['Dri_IDE'];
	$sql_xoa = "DELETE FROM tbl_driver WHERE Dri_IDE='".$id."' ";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlydanhmucdriver&query=them');
} 
?>
<!-- (isset($_GET['query'])=='xoa') -->