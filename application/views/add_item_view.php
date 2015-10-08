<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="<?php echo base_url() ?>">
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
		
		<link href="bower_components/magicsuggest/magicsuggest-min.css" rel="stylesheet">
		
		<!-- Date picker -->
	  	<link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />


		
		
		<style>
			img {
				width: auto;
				height: auto;
				max-width: 100%;
				max-height: 90%;
			}
			.error{
				color:red;
				font-weight: bold;
				display: inline-block
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
		<?php echo form_open('item/add'); ?>
				
			  <div class="form-group">
			    <label for="itemGroup">ประเภท<?php echo form_error('itemGroup'); ?></label>
			    <input type="text" class="form-control" id="itemGroup" name="itemGroup" value="<?php echo set_value('itemGroup'); ?>"/>
			  </div>	
				
			  <div class="form-group">
			  	<label for="closeDate">วันที่ปิดประมูล</label>
			  	<div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" id="closeDate" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
              </div>
			  
			  
			  <div class="form-group">
			    <label for="itemClosePrice">ราคาปิดประมูล</label>
			    <?php echo form_error('itemClosePrice'); ?>
			    <input type="number" class="form-control" id="itemClosePrice" name="itemClosePrice" placeholder="บาท" min="0">
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
		<script src="bower_components/magicsuggest/magicsuggest-min.js"></script>
		
	  <script type="text/javascript" src="bower_components/moment/min/moment.min.js"></script>
	  <script type="text/javascript" src="bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	  <script type="text/javascript" src="bower_components/moment/locale/th.js"></script>
		
		<script>
		$(function() {
			var types_json = <?php echo $item_types; ?>;
			var members_json = <?php echo $members; ?>;
			
			 $('#itemGroup').magicSuggest({
			 	allowDuplicates:false,
			 	allowFreeEntries:false,
			 	maxSelection :1,
				placeholder: 'ประเภทวัตถุมงคล',
		        data: types_json,
		        valueField: 'id',
		        displayField: 'type_name',
		        renderer: function(data){
		            return data.id + ' (<b>' + data.type_name + '</b>)';
		        },
		        resultAsString: true    
            		
    		 });
    		 
    		 $('#itemSellerId').magicSuggest({
			 	allowDuplicates:false,
			 	allowFreeEntries:false,
			 	maxSelection :1,
				placeholder: 'รหัสสมาชิก หรือ ชื่อเฟส',
		        data: members_json,
		        valueField: 'member_num',
		        displayField: 'facebook_name',
		        renderer: function(data){
		            return data.member_num + ' (<b>' + data.facebook_name + '</b>)';
		        },
		        resultAsString: true    
            		
    		 });
    		 
			 $('#datetimepicker1').datetimepicker({
			 	format:'DD/MM/YYYY',
			 	locale:'th'
			 });
    		 
		});
		</script>
		
	</body>
</html>



