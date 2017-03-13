	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
		<title>BaiTap</title>
	</head>
	<body>
		<h1>Tên : Nguyễn Đình Tú </h1>
		<h2>Lớp : D13PM01 </h2>
		<h2>MSVV: 1324801030034</h2>
		<script src="js/jquery-3.1.1.js" type="text/javascript"</script>
		<script src="js/bootstrap.min.js" type="text/javascript"</script>
		<script src="js/bootbox.min.js" type="text/javascript"></script>
		<?php
				$cc="";
				$cr="";
				if(isset($_POST[cc]) && isset($_POST[cr]))
				{
					$cc = $_POST[cc];
					$cr = $_POST[cr];
				}
			?>
	<form action="#" method="post" name="main-form">
		<div class="row">
			<div class="col-xs-12" style="text-align: center;">	
				<div class="input-group"  style="padding-left: 200px; padding-right: 1300px;padding-top: 30px; background-color:red">
		  			<span class="input-group-addon" id="basic-addon1">Nhập Chiều Cao</span>
		  			<input type="text" class="form-control" name="cc">
				</div>
				<div class="input-group"  style="padding-left: 200px; padding-right: 1300px;padding-top: 30px;background-color:red">
		  			<span class="input-group-addon" id="basic-addon1">Nhập Chiều Rộng</span>
		  			<input type="text" class="form-control" name="cr">
				</div>
				<div class="row" style="background-color:red">
				<button type="submit" class="btn btn-default">Xếp hình</button>
				
				</div>
			</div>
			<div class="row" style="text-align: center; padding-left: 700px; ">
			<table style="width: 200px; padding-left: 200px;">
			<tbody>
			<?php
				$dem = 1;
for ($i=0; $i<$cc; $i++)
{
	echo "<tr></tr>";
	for ($j=0; $j < $dem; $j++) { 
		if ($dem==$cc) {
			for($k=0; $k < $cr; $k++)
			{
				echo "<td style='width:1000px; height:10px; background-color:yellow;'>1</td>";
			}
			break;
		}
		
		echo "<td style='width:1000px; height:10px; background-color:yellow;'>1</td>";
	}

	$dem++;
				}
			?>

			</tbody>
			</table>
			</div>
		</div>
	</form>
	</body>
	</html>