<div class="container" style="margin-top: 50px;">
	<img src='images/bg01.jpg' style="margin-bottom: 10px;">

	<?php
	$attributes = array('id' => 'requestForm');
	echo form_open('member/submitrequest', $attributes);
	
	if(isset($memberDto)){
		echo var_dump($memberDto);
	}
	?>

	<div class="form-group">
		<label for="itemClosePrice">ชื่อเฟสบุ๊คที่ใช้</label><?php echo form_error('fbName'); ?>
		<input type="text" class="form-control" id="fbName" name="fbName" value="<?php echo set_value('fbName'); ?>"/>
	</div>
	<div class="form-group">
		<label for="itemClosePrice">ชื่อจริง</label><?php echo form_error('name'); ?>
		<input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name'); ?>"/>
	</div>
	<div class="form-group">
		<label for="itemClosePrice">นามสกุล</label><?php echo form_error('surname'); ?>
		<input type="text" class="form-control" id="surname" name="surname" value="<?php echo set_value('surname'); ?>"/>
	</div>
	<div class="form-group">
		<label for="itemClosePrice">หมายเลขบัตรประจำตัวประชาชน</label><?php echo form_error('cid'); ?>
		<input type="text" class="form-control" placeholder="ตัวเลข 13 หลัก" id="cid" name="cid" value="<?php echo set_value('cid'); ?>"/>
	</div>

	<div class="form-group">
		<label for="radioGroup">เพศ</label>
		<label class="radio-inline">
			<input type="radio" name="genders" id="gender1" value="ชาย">
			ชาย </label>
		<label class="radio-inline">
			<input type="radio" name="genders" id="gender2" value="หญิง">
			หญิง </label>
	</div>

	<div class="form-group">
		<label for="birthDate">วันเดือนปีเกิด</label><?php echo form_error('birthDate'); ?>
		<div class='input-group date' id='datetimepicker1'>
			<input type='text' class="form-control" id="birthDate" name="birthDate" value="<?php echo set_value('birthDate'); ?>" readonly/>
			<span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span>
		</div>
	</div>

	<div class="form-group">
		<label for="bankName">ธนาคาร</label><?php echo form_error('bankName'); ?>
		<select class="form-control" id="bankName" name="bankName">
			<option></option>
			<option>ธนาคารกรุงเทพ</option>
			<option>ธนาคารกรุงไทย</option>
			<option>ธนาคารกรุงศรีอยุธยา</option>
			<option>ธนาคารกสิกรไทย</option>
			<option>ธนาคารไทยพาณิชย์</option>
			<option>ธนาคารทหารไทย</option>
			<option>ธนาคารออมสิน</option>
			<option>ธนาคารธนชาต</option>
			<option>CIMB</option>
		</select>
	</div>

	<div class="form-group">
		<label for="accountNumber">หมายเลขบัญชีธนาคาร ต้องเป็นชื่อบัญชีเดียวกับบัตรประชาชน</label><?php echo form_error('accountNumber'); ?>
		<input type="text" class="form-control" placeholder="หมายเลขบัญชีธนาคาร" id="accountNumber" name="accountNumber" value="<?php echo set_value('accountNumber'); ?>"/>
	</div>

	<div class="form-group">
		<label for="phone">หมายเลขโทรศัพท์</label><?php echo form_error('phone'); ?>
		<input type="text" class="form-control" placeholder="เบอร์โทรติดต่อ" id="phone" name="phone" value="<?php echo set_value('phone'); ?>"/>
	</div>

	<div class="form-group">
		<label for="address">ที่อยู่</label><?php echo form_error('address'); ?>
		<input type="text" class="form-control" placeholder="ที่อยู่" id="address" name="address" value="<?php echo set_value('address'); ?>"/>
	</div>

	<div class="form-group">
		<label for="province">จังหวัด</label><?php echo form_error('province'); ?>
		<select class="form-control" id="province" name="province">
			<option value="0"></option>
			<option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
			<option value="กระบี่">กระบี่ </option>
			<option value="กาญจนบุรี">กาญจนบุรี </option>
			<option value="กาฬสินธุ์">กาฬสินธุ์ </option>
			<option value="กำแพงเพชร">กำแพงเพชร </option>
			<option value="ขอนแก่น">ขอนแก่น</option>
			<option value="จันทบุรี">จันทบุรี</option>
			<option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
			<option value="ชัยนาท">ชัยนาท </option>
			<option value="ชัยภูมิ">ชัยภูมิ </option>
			<option value="ชุมพร">ชุมพร </option>
			<option value="ชลบุรี">ชลบุรี </option>
			<option value="เชียงใหม่">เชียงใหม่ </option>
			<option value="เชียงราย">เชียงราย </option>
			<option value="ตรัง">ตรัง </option>
			<option value="ตราด">ตราด </option>
			<option value="ตาก">ตาก </option>
			<option value="นครนายก">นครนายก </option>
			<option value="นครปฐม">นครปฐม </option>
			<option value="นครพนม">นครพนม </option>
			<option value="นครราชสีมา">นครราชสีมา </option>
			<option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
			<option value="นครสวรรค์">นครสวรรค์ </option>
			<option value="นราธิวาส">นราธิวาส </option>
			<option value="น่าน">น่าน </option>
			<option value="นนทบุรี">นนทบุรี </option>
			<option value="บึงกาฬ">บึงกาฬ</option>
			<option value="บุรีรัมย์">บุรีรัมย์</option>
			<option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
			<option value="ปทุมธานี">ปทุมธานี </option>
			<option value="ปราจีนบุรี">ปราจีนบุรี </option>
			<option value="ปัตตานี">ปัตตานี </option>
			<option value="พะเยา">พะเยา </option>
			<option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
			<option value="พังงา">พังงา </option>
			<option value="พิจิตร">พิจิตร </option>
			<option value="พิษณุโลก">พิษณุโลก </option>
			<option value="เพชรบุรี">เพชรบุรี </option>
			<option value="เพชรบูรณ์">เพชรบูรณ์ </option>
			<option value="แพร่">แพร่ </option>
			<option value="พัทลุง">พัทลุง </option>
			<option value="ภูเก็ต">ภูเก็ต </option>
			<option value="มหาสารคาม">มหาสารคาม </option>
			<option value="มุกดาหาร">มุกดาหาร </option>
			<option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
			<option value="ยโสธร">ยโสธร </option>
			<option value="ยะลา">ยะลา </option>
			<option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
			<option value="ระนอง">ระนอง </option>
			<option value="ระยอง">ระยอง </option>
			<option value="ราชบุรี">ราชบุรี</option>
			<option value="ลพบุรี">ลพบุรี </option>
			<option value="ลำปาง">ลำปาง </option>
			<option value="ลำพูน">ลำพูน </option>
			<option value="เลย">เลย </option>
			<option value="ศรีสะเกษ">ศรีสะเกษ</option>
			<option value="สกลนคร">สกลนคร</option>
			<option value="สงขลา">สงขลา </option>
			<option value="สมุทรสาคร">สมุทรสาคร </option>
			<option value="สมุทรปราการ">สมุทรปราการ </option>
			<option value="สมุทรสงคราม">สมุทรสงคราม </option>
			<option value="สระแก้ว">สระแก้ว </option>
			<option value="สระบุรี">สระบุรี </option>
			<option value="สิงห์บุรี">สิงห์บุรี </option>
			<option value="สุโขทัย">สุโขทัย </option>
			<option value="สุพรรณบุรี">สุพรรณบุรี </option>
			<option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
			<option value="สุรินทร์">สุรินทร์ </option>
			<option value="สตูล">สตูล </option>
			<option value="หนองคาย">หนองคาย </option>
			<option value="หนองบัวลำภู">หนองบัวลำภู </option>
			<option value="อำนาจเจริญ">อำนาจเจริญ </option>
			<option value="อุดรธานี">อุดรธานี </option>
			<option value="อุตรดิตถ์">อุตรดิตถ์ </option>
			<option value="อุทัยธานี">อุทัยธานี </option>
			<option value="อุบลราชธานี">อุบลราชธานี</option>
			<option value="อ่างทอง">อ่างทอง </option>
		</select>
	</div>

	<button type="button" class="btn btn-lg btn-primary" id="submitButton">
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

		$('#datetimepicker1').datetimepicker({
			format : 'YYYY-MM-DD',
			locale : 'th',
			ignoreReadonly: true
		});

		$("#submitButton").click(function() {

			var bankSelect = document.getElementById("bankName");
			var provinceSelect = document.getElementById("province");
			if (bankSelect.selectedIndex == 0) {
				alert('เลือก ธนาคาร ด้วยครับ');
				bankSelect.focus();
				return;
			}
			
			if (provinceSelect.selectedIndex == 0) {
				alert('เลือก จังหวัด ด้วยครับ');
				provinceSelect.focus();
				return;
			}

			var gender1 = document.getElementById("gender1");
			var gender2 = document.getElementById("gender2");
			if (!gender1.checked && !gender2.checked) {
				alert('กรุณาเลือกเพศของคุณ');
				gender1.focus();
				return;
			}
			

			document.forms['requestForm'].submit();

		});
		
		$("#backButton").click(function() {
			
			history.back();
		});

	}); 
</script>

</body>
</html>

