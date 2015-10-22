<div class="container" style="margin-top: 50px;">
	<img src='images/bg01.jpg' style="margin-bottom: 10px;">

	<ul class="nav nav-pills">
	  <li role="presentation" class="active"><a href="#" onclick="return false;">1. ข้อมูลสมาชิก</a></li>
	  <li role="presentation" class="disabled"><a href="#" onclick="return false;">2. อัพโหลดเอกสาร</a></li>
	</ul>
	
	<?php
	$attributes = array('id' => 'requestForm');
	echo form_open('member/submitrequest', $attributes);
	?>
    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
    
	<div class="form-group" style="margin-top: 10px;">
		<label for="itemClosePrice">ชื่อเฟสบุ๊คที่ใช้</label><?php echo form_error('fbName'); ?>
		<input type="text" class="form-control" id="fbName" name="fbName" value="<?php echo set_value('fbName', $fbName); ?>"/>
	</div>
	<div class="form-group">
		<label for="itemClosePrice">ชื่อจริง</label><?php echo form_error('name'); ?>
		<input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name', $name); ?>"/>
	</div>
	<div class="form-group">
		<label for="itemClosePrice">นามสกุล</label><?php echo form_error('surname'); ?>
		<input type="text" class="form-control" id="surname" name="surname" value="<?php echo set_value('surname', $surname); ?>"/>
	</div>
	<div class="form-group">
		<label for="itemClosePrice">หมายเลขบัตรประจำตัวประชาชน</label><?php echo form_error('cid'); ?>
		<input type="text" class="form-control" placeholder="ตัวเลข 13 หลัก" id="cid" name="cid" value="<?php echo set_value('cid', $cid); ?>"/>
	</div>

	<div class="form-group">
		<label for="radioGroup">เพศ</label>
		<label class="radio-inline">
			<input type="radio" name="genders" id="gender1" value="ชาย" <?php echo set_radio('genders', 'ชาย', $gender == 'ชาย') ?>>
			ชาย </label>
		<label class="radio-inline">
			<input type="radio" name="genders" id="gender2" value="หญิง" <?php echo set_radio('genders', 'หญิง', $gender == 'หญิง') ?>>
			หญิง </label>
	</div>

	<div class="form-group">
		<label for="birthDate">วันเดือนปีเกิด</label><?php echo form_error('birthDate'); ?>
		<div class='input-group date' id='datetimepicker1'>
			<input type='text' class="form-control" id="birthDate" name="birthDate" value="<?php echo set_value('birthDate', $birthDate); ?>" readonly/>
			<span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span>
		</div>
	</div>
	
	<div class="form-group">
		<label for="address">ที่อยู่</label><?php echo form_error('address'); ?>
		<input type="text" class="form-control" placeholder="ที่อยู่" id="address" name="address" value="<?php echo set_value('address', $address); ?>"/>
	</div>

	<div class="form-group">
		<label for="province">จังหวัด</label><?php echo form_error('province'); ?>
		<select class="form-control" id="province" name="province">
			<option value="0"></option>
			<option value="กรุงเทพมหานคร" <?php echo set_select('province', 'กรุงเทพมหานคร', $province == 'กรุงเทพมหานคร') ?> >กรุงเทพมหานคร</option>
			<option value="กระบี่" <?php echo set_select('province',  'กระบี่', $province == 'กระบี่') ?> >กระบี่ </option>
            <option value="กาญจนบุรี" <?php echo set_select('province',  'กาญจนบุรี', $province == 'กาญจนบุรี') ?> >กาญจนบุรี </option>
            <option value="กาฬสินธุ์" <?php echo set_select('province',  'กาฬสินธุ์', $province == 'กาฬสินธุ์') ?> >กาฬสินธุ์ </option>
            <option value="กำแพงเพชร" <?php echo set_select('province',  'กำแพงเพชร', $province == 'กำแพงเพชร') ?> >กำแพงเพชร </option>
            <option value="ขอนแก่น" <?php echo set_select('province',  'ขอนแก่น', $province == 'ขอนแก่น') ?> >ขอนแก่น</option>
            <option value="จันทบุรี" <?php echo set_select('province',  'จันทบุรี', $province == 'จันทบุรี') ?> >จันทบุรี</option>
            <option value="ฉะเชิงเทรา" <?php echo set_select('province',  'ฉะเชิงเทรา', $province == 'ฉะเชิงเทรา') ?> >ฉะเชิงเทรา </option>
            <option value="ชัยนาท" <?php echo set_select('province',  'ชัยนาท', $province == 'ชัยนาท') ?> >ชัยนาท </option>
            <option value="ชัยภูมิ" <?php echo set_select('province',  'ชัยภูมิ', $province == 'ชัยภูมิ') ?> >ชัยภูมิ </option>
            <option value="ชุมพร" <?php echo set_select('province',  'ชุมพร', $province == 'ชุมพร') ?> >ชุมพร </option>
            <option value="ชลบุรี" <?php echo set_select('province',  'ชลบุรี', $province == 'ชลบุรี') ?> >ชลบุรี </option>
            <option value="เชียงใหม่" <?php echo set_select('province',  'เชียงใหม่', $province == 'เชียงใหม่') ?> >เชียงใหม่ </option>
            <option value="เชียงราย" <?php echo set_select('province',  'เชียงราย', $province == 'เชียงราย') ?> >เชียงราย </option>
            <option value="ตรัง" <?php echo set_select('province',  'ตรัง', $province == 'ตรัง') ?> >ตรัง </option>
            <option value="ตราด" <?php echo set_select('province',  'ตราด', $province == 'ตราด') ?> >ตราด </option>
            <option value="ตาก" <?php echo set_select('province',  'ตาก', $province == 'ตาก') ?> >ตาก </option>
            <option value="นครนายก" <?php echo set_select('province',  'นครนายก', $province == 'นครนายก') ?> >นครนายก </option>
            <option value="นครปฐม" <?php echo set_select('province',  'นครปฐม', $province == 'นครปฐม') ?> >นครปฐม </option>
            <option value="นครพนม" <?php echo set_select('province',  'นครพนม', $province == 'นครพนม') ?> >นครพนม </option>
            <option value="นครราชสีมา" <?php echo set_select('province',  'นครราชสีมา', $province == 'นครราชสีมา') ?> >นครราชสีมา </option>
            <option value="นครศรีธรรมราช" <?php echo set_select('province',  'นครศรีธรรมราช', $province == 'นครศรีธรรมราช') ?> >นครศรีธรรมราช </option>
            <option value="นครสวรรค์" <?php echo set_select('province',  'นครสวรรค์', $province == 'นครสวรรค์') ?> >นครสวรรค์ </option>
            <option value="นราธิวาส" <?php echo set_select('province',  'นราธิวาส', $province == 'นราธิวาส') ?> >นราธิวาส </option>
            <option value="น่าน" <?php echo set_select('province',  'น่าน', $province == 'น่าน') ?> >น่าน </option>
            <option value="นนทบุรี" <?php echo set_select('province',  'นนทบุรี', $province == 'นนทบุรี') ?> >นนทบุรี </option>
            <option value="บึงกาฬ" <?php echo set_select('province',  'บึงกาฬ', $province == 'บึงกาฬ') ?> >บึงกาฬ</option>
            <option value="บุรีรัมย์" <?php echo set_select('province',  'บุรีรัมย์', $province == 'บุรีรัมย์') ?> >บุรีรัมย์</option>
            <option value="ประจวบคีรีขันธ์" <?php echo set_select('province',  'ประจวบคีรีขันธ์', $province == 'ประจวบคีรีขันธ์') ?> >ประจวบคีรีขันธ์ </option>
            <option value="ปทุมธานี" <?php echo set_select('province',  'ปทุมธานี', $province == 'ปทุมธานี') ?> >ปทุมธานี </option>
            <option value="ปราจีนบุรี" <?php echo set_select('province',  'ปราจีนบุรี', $province == 'ปราจีนบุรี') ?> >ปราจีนบุรี </option>
            <option value="ปัตตานี" <?php echo set_select('province',  'ปัตตานี', $province == 'ปัตตานี') ?> >ปัตตานี </option>
            <option value="พะเยา" <?php echo set_select('province',  'พะเยา', $province == 'พะเยา') ?> >พะเยา </option>
            <option value="พระนครศรีอยุธยา" <?php echo set_select('province',  'พระนครศรีอยุธยา', $province == 'พระนครศรีอยุธยา') ?> >พระนครศรีอยุธยา </option>
            <option value="พังงา" <?php echo set_select('province',  'พังงา', $province == 'พังงา') ?> >พังงา </option>
            <option value="พิจิตร" <?php echo set_select('province',  'พิจิตร', $province == 'พิจิตร') ?> >พิจิตร </option>
            <option value="พิษณุโลก" <?php echo set_select('province',  'พิษณุโลก', $province == 'พิษณุโลก') ?> >พิษณุโลก </option>
            <option value="เพชรบุรี" <?php echo set_select('province',  'เพชรบุรี', $province == 'เพชรบุรี') ?> >เพชรบุรี </option>
            <option value="เพชรบูรณ์" <?php echo set_select('province',  'เพชรบูรณ์', $province == 'เพชรบูรณ์') ?> >เพชรบูรณ์ </option>
            <option value="แพร่" <?php echo set_select('province',  'แพร่', $province == 'แพร่') ?> >แพร่ </option>
            <option value="พัทลุง" <?php echo set_select('province',  'พัทลุง', $province == 'พัทลุง') ?> >พัทลุง </option>
            <option value="ภูเก็ต" <?php echo set_select('province',  'ภูเก็ต', $province == 'ภูเก็ต') ?> >ภูเก็ต </option>
            <option value="มหาสารคาม" <?php echo set_select('province',  'มหาสารคาม', $province == 'มหาสารคาม') ?> >มหาสารคาม </option>
            <option value="มุกดาหาร" <?php echo set_select('province',  'มุกดาหาร', $province == 'มุกดาหาร') ?> >มุกดาหาร </option>
            <option value="แม่ฮ่องสอน" <?php echo set_select('province',  'แม่ฮ่องสอน', $province == 'แม่ฮ่องสอน') ?> >แม่ฮ่องสอน </option>
            <option value="ยโสธร" <?php echo set_select('province',  'ยโสธร', $province == 'ยโสธร') ?> >ยโสธร </option>
            <option value="ยะลา" <?php echo set_select('province',  'ยะลา', $province == 'ยะลา') ?> >ยะลา </option>
            <option value="ร้อยเอ็ด" <?php echo set_select('province',  'ร้อยเอ็ด', $province == 'ร้อยเอ็ด') ?> >ร้อยเอ็ด </option>
            <option value="ระนอง" <?php echo set_select('province',  'ระนอง', $province == 'ระนอง') ?> >ระนอง </option>
            <option value="ระยอง" <?php echo set_select('province',  'ระยอง', $province == 'ระยอง') ?> >ระยอง </option>
            <option value="ราชบุรี" <?php echo set_select('province',  'ราชบุรี', $province == 'ราชบุรี') ?> >ราชบุรี</option>
            <option value="ลพบุรี" <?php echo set_select('province',  'ลพบุรี', $province == 'ลพบุรี') ?> >ลพบุรี </option>
            <option value="ลำปาง" <?php echo set_select('province',  'ลำปาง', $province == 'ลำปาง') ?> >ลำปาง </option>
            <option value="ลำพูน" <?php echo set_select('province',  'ลำพูน', $province == 'ลำพูน') ?> >ลำพูน </option>
            <option value="เลย" <?php echo set_select('province',  'เลย', $province == 'เลย') ?> >เลย </option>
            <option value="ศรีสะเกษ" <?php echo set_select('province',  'ศรีสะเกษ', $province == 'ศรีสะเกษ') ?> >ศรีสะเกษ</option>
            <option value="สกลนคร" <?php echo set_select('province',  'สกลนคร', $province == 'สกลนคร') ?> >สกลนคร</option>
            <option value="สงขลา" <?php echo set_select('province',  'สงขลา', $province == 'สงขลา') ?> >สงขลา </option>
            <option value="สมุทรสาคร" <?php echo set_select('province',  'สมุทรสาคร', $province == 'สมุทรสาคร') ?> >สมุทรสาคร </option>
            <option value="สมุทรปราการ" <?php echo set_select('province',  'สมุทรปราการ', $province == 'สมุทรปราการ') ?> >สมุทรปราการ </option>
            <option value="สมุทรสงคราม" <?php echo set_select('province',  'สมุทรสงคราม', $province == 'สมุทรสงคราม') ?> >สมุทรสงคราม </option>
            <option value="สระแก้ว" <?php echo set_select('province',  'สระแก้ว', $province == 'สระแก้ว') ?> >สระแก้ว </option>
            <option value="สระบุรี" <?php echo set_select('province',  'สระบุรี', $province == 'สระบุรี') ?> >สระบุรี </option>
            <option value="สิงห์บุรี" <?php echo set_select('province',  'สิงห์บุรี', $province == 'สิงห์บุรี') ?> >สิงห์บุรี </option>
            <option value="สุโขทัย" <?php echo set_select('province',  'สุโขทัย', $province == 'สุโขทัย') ?> >สุโขทัย </option>
            <option value="สุพรรณบุรี" <?php echo set_select('province',  'สุพรรณบุรี', $province == 'สุพรรณบุรี') ?> >สุพรรณบุรี </option>
            <option value="สุราษฎร์ธานี" <?php echo set_select('province',  'สุราษฎร์ธานี', $province == 'สุราษฎร์ธานี') ?> >สุราษฎร์ธานี </option>
            <option value="สุรินทร์" <?php echo set_select('province',  'สุรินทร์', $province == 'สุรินทร์') ?> >สุรินทร์ </option>
            <option value="สตูล" <?php echo set_select('province',  'สตูล', $province == 'สตูล') ?> >สตูล </option>
            <option value="หนองคาย" <?php echo set_select('province',  'หนองคาย', $province == 'หนองคาย') ?> >หนองคาย </option>
            <option value="หนองบัวลำภู" <?php echo set_select('province',  'หนองบัวลำภู', $province == 'หนองบัวลำภู') ?> >หนองบัวลำภู </option>
            <option value="อำนาจเจริญ" <?php echo set_select('province',  'อำนาจเจริญ', $province == 'อำนาจเจริญ') ?> >อำนาจเจริญ </option>
            <option value="อุดรธานี" <?php echo set_select('province',  'อุดรธานี', $province == 'อุดรธานี') ?> >อุดรธานี </option>
            <option value="อุตรดิตถ์" <?php echo set_select('province',  'อุตรดิตถ์', $province == 'อุตรดิตถ์') ?> >อุตรดิตถ์ </option>
            <option value="อุทัยธานี" <?php echo set_select('province',  'อุทัยธานี', $province == 'อุทัยธานี') ?> >อุทัยธานี </option>
            <option value="อุบลราชธานี" <?php echo set_select('province',  'อุบลราชธานี', $province == 'อุบลราชธานี') ?> >อุบลราชธานี</option>
            <option value="อ่างทอง" <?php echo set_select('province',  'อ่างทอง', $province == 'อ่างทอง') ?> >อ่างทอง </option>
		</select>
	</div>	
	
	

	<div class="form-group">
		<label for="bankName">ธนาคาร</label><?php echo form_error('bankName'); ?>
		<select class="form-control" id="bankName" name="bankName">
			<option></option>
            <option value="ธนาคารกรุงเทพ" <?php echo set_select('bankName',  'ธนาคารกรุงเทพ', $bankName == 'ธนาคารกรุงเทพ') ?> >ธนาคารกรุงเทพ</option>
            <option value="ธนาคารกรุงไทย" <?php echo set_select('bankName',  'ธนาคารกรุงไทย', $bankName == 'ธนาคารกรุงไทย') ?> >ธนาคารกรุงไทย</option>
            <option value="ธนาคารกรุงศรีอยุธยา" <?php echo set_select('bankName',  'ธนาคารกรุงศรีอยุธยา', $bankName == 'ธนาคารกรุงศรีอยุธยา') ?> >ธนาคารกรุงศรีอยุธยา</option>
            <option value="ธนาคารกสิกรไทย" <?php echo set_select('bankName',  'ธนาคารกสิกรไทย', $bankName == 'ธนาคารกสิกรไทย') ?> >ธนาคารกสิกรไทย</option>
            <option value="ธนาคารไทยพาณิชย์" <?php echo set_select('bankName',  'ธนาคารไทยพาณิชย์', $bankName == 'ธนาคารไทยพาณิชย์') ?> >ธนาคารไทยพาณิชย์</option>
            <option value="ธนาคารทหารไทย" <?php echo set_select('bankName',  'ธนาคารทหารไทย', $bankName == 'ธนาคารทหารไทย') ?> >ธนาคารทหารไทย</option>
            <option value="ธนาคารออมสิน" <?php echo set_select('bankName',  'ธนาคารออมสิน', $bankName == 'ธนาคารออมสิน') ?> >ธนาคารออมสิน</option>
            <option value="ธนาคารธนชาต" <?php echo set_select('bankName',  'ธนาคารธนชาต', $bankName == 'ธนาคารธนชาต') ?> >ธนาคารธนชาต</option>
            <option value="CIMB" <?php echo set_select('bankName',  'CIMB', $bankName == 'CIMB') ?> >CIMB</option>
		</select>
	</div>

	<div class="form-group">
		<label for="accountNumber">หมายเลขบัญชีธนาคาร ต้องเป็นชื่อบัญชีเดียวกับบัตรประชาชน</label><?php echo form_error('accountNumber'); ?>
		<input type="text" class="form-control" placeholder="หมายเลขบัญชีธนาคาร" id="accountNumber" name="accountNumber" value="<?php echo set_value('accountNumber', $accountNumber); ?>"/>
	</div>

	<div class="form-group">
		<label for="phone">หมายเลขโทรศัพท์</label><?php echo form_error('phone'); ?>
		<input type="text" class="form-control" placeholder="เบอร์โทรติดต่อ" id="phone" name="phone" value="<?php echo set_value('phone', $phone); ?>"/>
	</div>

	

	<button type="button" class="btn btn-lg btn-success" id="submitButton">
		ต่อไป
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
			ignoreReadonly: true,
			allowInputToggle: true
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

