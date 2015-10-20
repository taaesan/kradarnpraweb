<div class="container" style="margin-top: 100px;">
	
	
	
	<img src='images/bg01.jpg'>
	
	<table class="table table-hover">
		<caption>
			<?php if(!empty($memberRow)) { ?>
				<?php echo $memberRow->GROUP_NAME; ?>
			<?php } ?>
		</caption>
		<!--
		<thead>
			<th>รหัส</th>
			<th>ชื่อเฟส</th>
			<th>ชื่อ นามสกุล</th>
		</thead>
		-->
		<tbody>
			
			<?php if(!empty($memberRow)) { ?>
			<tr>
				<td>หมายเลขสมาชิก</td>
				<td><?php echo $memberRow->MEMBER_NUM; ?></td>
			</tr>
			<tr>
				<td>ชื่อเฟสบุ๊ค</td>
				<td><?php echo $memberRow->FACEBOOK_NAME; ?> </td>
			</tr>
			<tr>
				<td>ชื่อ นามสกุล</td>
				<td><?php echo $memberRow->NAME; ?> <?php echo $memberRow->SURNAME; ?></td>
			</tr>
			<tr>
				<td>ธนาคาร</td>
				<td><?php echo $memberRow->BANK_NAME; ?> <?php echo $memberRow->BANK_ACCOUNT_NUMBER; ?></td>
			</tr>
			<?php } ?>
			
		</tbody>
	</table>
	<a href="member.html">&lt;กลับ</a>
	
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

		$('#menu3').addClass("active");
		

	}); 
</script>

</body>
</html>

