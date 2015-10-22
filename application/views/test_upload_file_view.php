<div class="container" style="margin-top: 50px;">
	<img src='images/bg01.jpg' style="margin-bottom: 10px;">

	<?php
	$attributes = array('id' => 'requestForm');

	?>
	
	<form enctype="multipart/form-data" action="member/testupload" method="post">
		
	<div class="form-group">
		<label for="fupload">Upload file</label>
		<input type="file" class="form-control" id="fupload" name="fupload" />
	</div>
	

	<button type="submit" class="btn btn-lg btn-primary" id="submitButton">
		ส่งข้อมูล
	</button>
	<button type="button" class="btn btn-lg btn-default" id="backButton">ยกเลิก</button>
	
	</form>


</div>

<!-- Main jumbotron for a primary marketing message or call to action -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bower_components/magicsuggest/magicsuggest-min.js"></script>

<script type="text/javascript" src="bower_components/moment/min/moment.min.js"></script>
<script type="text/javascript" src="bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="bower_components/moment/locale/th.js"></script>

<script>
	$(function() {

		$('#menu4').addClass("active");
		
		$("#backButton").click(function() {
			
			location.href = '<?php echo base_url() ?>/member/request/';
		});

	}); 
</script>

</body>
</html>

