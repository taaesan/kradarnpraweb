<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">

		<title>Theme Template for Bootstrap</title>

		<!-- Bootstrap core CSS -->
		<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Bootstrap theme -->
		<link href="node_modules/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
		
		<link href="magicsuggest/magicsuggest-min.css" rel="stylesheet">
		
		
		<style>
			img {
				width: auto;
				height: auto;
				max-width: 100%;
				max-height: 90%;
			}

		</style>

	</head>

	<body>

		<nav class="navbar navbar-default navbar-fixed-top" >
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">กระดานพระ</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">หน้าแรกกลุ่ม</a>
						</li>
						<li>
							<a href="#about">วัตถุมงคล</a>
						</li>
						<li>
							<a href="#about">สมาชิกกลุ่ม</a>
						</li>
						<li>
							<a href="#contact">ติดต่อผู้ดูแล</a>
						</li>
						
						<!--li>
							<form class="navbar-form navbar-left" role="search">
							  <div class="form-group">
							    <input type="text" class="form-control" placeholder="Search">
							  </div>
							  <button type="submit" class="btn btn-default">Submit</button>
							</form>
						</li-->
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

		<div class="container" style="margin-top: 100px;">

			<form>
				
			  <div class="form-group">
			    <label for="itemGroup">ประเภท</label>
			    <input type="text" class="form-control" id="itemGroup"/>
			  </div>	
				
			  <div class="form-group">
			    <label for="itemDate">วันที่</label>
			    <input type="date" class="form-control" id="itemDate" placeholder="วันที่">
			  </div>
			  <div class="form-group">
			    <label for="itemClosePrice">ราคาปิดประมูล</label>
			    <input type="number" class="form-control" id="itemClosePrice" placeholder="บาท" min="0">
			  </div>
			  <div class="form-group">
			    <label for="itemClosePrice">link</label>
			    <input type="text" class="form-control" id="itemLink" placeholder="ลิ้งค์รายการประมูล">
			  </div>
			  <div class="form-group">
			    <label for="itemSellerId">สมาชิกผู้เปิดประมูล</label>
			    <input type="text" class="form-control" id="itemSellerId" placeholder="รหัสสมาชิก">
			  </div>
			  
			  <button type="submit" class="btn btn-default">บันทึก</button>
			</form>


		</div>

		<!-- Main jumbotron for a primary marketing message or call to action -->

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="magicsuggest/magicsuggest-min.js"></script>
		
		<script>
		var dataText;
		$(function() {
			dataText = <?php echo $item_types; ?>;
			
			 $('#itemGroup').magicSuggest({
			 	allowDuplicates:false,
			 	allowFreeEntries:false,
			 	maxSelection :1,
				placeholder: 'ประเภทวัตถุมงคล',
		        data: dataText,
		        valueField: 'id',
		        displayField: 'name',
		        renderer: function(data){
		            return data.name + ' (<b>' + data.name + '</b>)';
		        },
		        resultAsString: true    
            		
    		 });
		});
		</script>
		
	</body>
</html>



