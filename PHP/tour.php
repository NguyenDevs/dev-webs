<body>
<?php 
if(!isset($_POST["Submit"])) include "datcho.php";
else {
?>
	<div align="center"> 
	<?php
		$ten=$_POST["txtten"];
		$tuoi=$_POST["cbotuoi"];
		$gt=$_POST["rdbgt"];
		$diachi=$_POST["txtdiachi"];
		$sokhach=$_POST["txtsokhach"];
		$ngay=$_POST["txtngay"];
		
		$loai1=$_POST["chkloai"];
		$diadiem=$_POST["rdbdiadiem"];
		$yeucau=$_POST["txtyeucau"];
		$qc=$_POST["select"];
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$now = getdate(); 
		$time = $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"] . " - " . $now["mday"] . "/" . $now["mon"] . "/" . $now["year"] ; 
		 
?>
	<table width="573" border="0">
	<tr>
	<td width="567">
	 <h2 align="center">THÔNG TIN ĐẶT CHỖ </h2>
	<p><strong>Thông tin khách hàng:</strong></p>
	 Họ tên: <?php echo $ten." / ";?> - Độ tuổi: <?php echo $tuoi." / ";?>  Giới tính: <?php echo $gt;?> <br />
	 Địa chỉ: <?php echo $diachi;?> <br />
		<strong>Thông tin đặt chỗ:</strong> <br />
		Số khách tham gia bữa tiệc:<?php echo $sokhach." / ";?> - Ngày đặt tiệc: <?php echo $ngay;?> <br />
		Loại tiệc:&nbsp; <?php for($i=0;$i<count($loai1);$i++) echo $loai1[$i]." -  ";?> Địa điểm:<?php echo $diadiem;?> <br />
		<Strong>Các yêu cầu kèm theo:</Strong> <br />
		<?php echo nl2br($yeucau);?> <br />
		Quý khách biết đến nhà hàng chúng tôi qua: <?php echo $qc;?>
	<br />
	
	</td>
	</tr>
	</table>
	</div>
<?php } ?>
</body>
