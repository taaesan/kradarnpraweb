<div class="container" style="margin-top: 50px;">
	<!-- imgHeader -->
    <img src='images/bg01.jpg' id="imgHeader">
	
	<table class="table table-hover">
		<caption>
			<?php if(!empty($memberRow)) { ?>
				<?php echo $memberRow->group_name; ?>
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
				<td><?php echo $memberRow->member_num; ?></td>
			</tr>
			<tr>
				<td>ชื่อเฟสบุ๊ค</td>
				<td><?php echo $memberRow->facebook_name; ?> </td>
			</tr>
			<tr>
				<td>ชื่อ นามสกุล</td>
				<td><?php echo $memberRow->name; ?> <?php echo $memberRow->surname; ?></td>
			</tr>
			<tr>
				<td>ธนาคาร</td>
				<td><?php echo $memberRow->bank_name; ?> <?php echo $memberRow->bank_account_number; ?></td>
			</tr>
			<?php } ?>
			
		</tbody>
	</table>
	<a href="member.html">&lt;กลับ</a>
	
    <!-- Footer -->
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-pills nav-justified">
                <li>
                    <a href="http://www.kradarnpra.com">กระดานพระ</a>
                </li>
                <li>
                    <a href="https://www.facebook.com/groups/sitluangpoonham/"> ศิษย์หลวงปู่นาม วัดน้อยชมภู่ </a>
                </li>
                <li>
                    <a href="http://www.kradarnpra.com/v1/about/contact">ติดต่อทีมงาน</a>
                </li>
            </ul>
        </div>
    </div>
	
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

