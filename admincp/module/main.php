<div class="clear"></div>
<div class="main">
	<?php
		if(isset($_GET['action']) && $_GET['query']){
			$tam = $_GET['action'];
			$query = $_GET['query'];
		}else{
			$tam = '';
			$query = '';
		}
		if ($tam=='quanlydanhmucdriver' && $query=='them') {
			include("module/quanlydanhmucdr/them.php");
			// include("module/quanlydanhmucdr/lietke.php");
		}elseif($tam=='quanlydanhmucdriver' && $query=='them1'){
			// include("module/quanlydanhmucdr/them.php");
			include("module/quanlydanhmucdr/lietke.php");
		}elseif($tam=='quanlydanhmucdriver' && $query=='sua'){
			include("module/quanlydanhmucdr/sua.php");
			//Dang ki tro thanh hoc sinh
		}elseif ($tam=='quanlyhocsinh' && $query=='them' ) {
		 	include("module/quanlyhocsinh/them.php");
			//Quan li danh muc hoc sinh
		}elseif($tam=='quanlyhocsinh' && $query=='them1'){
			include("module/quanlyhocsinh/lietke.php");
			//Sua danh muc hoc sinh
		}elseif($tam=='quanlyhocsinh' && $query=='sua'){
			include("module/quanlyhocsinh/sua.php");

		}else{
			include("module/dashboard.php");
		}
	?>
</div>
	


<p>main Admincp</p>
