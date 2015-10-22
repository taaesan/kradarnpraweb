<div class="container" style="margin-top: 50px;">
	<img src='images/bg01.jpg' style="margin-bottom: 10px;">

	<ul class="nav nav-pills">
	  <li role="presentation"><a href="<?php echo base_url().'/member/request/'.$memberRow->ID ?>">1. ข้อมูลสมาชิก</a></li>
	  <li role="presentation" class="active"><a href="#" onclick="return false;">2. อัพโหลดเอกสาร</a></li>
	</ul>
	
	<input type="hidden" name="id" id="id" value="<?php if(!empty($memberRow)) {echo $memberRow->ID;} ?>" />
	
	<table class="table table-hover">
        <caption>
            ข้อมูลที่กรอกเข้ามา
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
                <td>ชื่อเฟสบุ๊ค</td>
                <td><?php echo $memberRow->FACEBOOK_NAME; ?> </td>
            </tr>
            <tr>
                <td>ชื่อ นามสกุล</td>
                <td><?php echo $memberRow->NAME; ?> <?php echo $memberRow->SURNAME; ?></td>
            </tr>
            <tr>
                <td>หมายเลขบัตรประจำตัวประชาชน</td>
                <td><?php echo $memberRow->CID; ?></td>
            </tr>
            <tr>
                <td>เพศ</td>
                <td><?php echo $memberRow->GENDER; ?></td>
            </tr>  
            <tr>
                <td>วันเดือนปีเกิด</td>
                <td><?php echo $memberRow->BIRTH_DATE; ?></td>
            </tr>            
            <tr>
                <td>ที่อยู่</td>
                <td><?php echo $memberRow->ADDRESS; ?> <?php echo $memberRow->PROVINCE_NAME; ?></td>
            </tr> 
            <tr>
                <td>เบอร์โทร</td>
                <td><?php echo $memberRow->PHONE_NUMBER; ?></td>
            </tr>                              
            <tr>
                <td>ธนาคาร</td>
                <td><?php echo $memberRow->BANK_NAME; ?> <?php echo $memberRow->BANK_ACCOUNT_NUMBER; ?></td>
            </tr>
            <?php } ?>
            
        </tbody>
    </table>

	<button type="button" class="btn btn-lg btn-success" id="submitButton">
		บันทึก
	</button>
	<button type="button" id="editBtn" class="btn btn-lg btn-default" id="backButton">แก้ไขข้อมูล</button>
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
		
		$("#editBtn ").click(function() {
			location.href = '<?php echo base_url().'/member/request/'.$memberRow->ID ?>';
		});

	}); 
</script>

</body>
</html>

