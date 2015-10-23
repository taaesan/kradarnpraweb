<div class="container" style="margin-top: 50px;">
    <!-- imgHeader -->
	<img src='images/bg01.jpg' id="imgHeader">

	<ul class="nav nav-pills">
	  <li role="presentation"><a href="<?php echo base_url().'member/request/'.$memberRow->ID ?>">1. ข้อมูลสมาชิก</a></li>
	  <li role="presentation" class="active"><a href="#" onclick="return false;">2. ส่งเอกสาร และ ตรวจสอบข้อมูล</a></li>
	</ul>
	
	<input type="hidden" name="id" id="id" value="<?php if(!empty($memberRow)) {echo $memberRow->ID;} ?>" />
	
	<div class="row" style="margin-top:  10px;">
    	<div class="col-sm-6 col-md-4">
        	<div class="thumbnail">
                <div id="preview1" class="preview-box"></div>
                <div class="caption">
                    <h3>ภาพบัตรประชาชน</h3>
                    <p>ปิดหมายเลขบัตร วันเดือนปีเกิด ด้วยนะครับ</p>
                    <span class="btn btn-default btn-file">เลือกภาพ<input type="file" name="images" id="images"></span>
                    <div id="response1"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div id="preview2" class="preview-box"></div>
                <div class="caption">
                    <h3>ภาพหน้าแรกบัญชีธนาคาร</h3>
                    <p>ชื่อบัญชีตรงกับบัตรประชาชน</p>
                    <span class="btn btn-default btn-file">เลือกภาพ<input type="file" name="images" id="images"></span>
                    <div id="response2"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div id="preview3" class="preview-box"></div>
                <div class="caption">
                    <h3>ภาพเจ้าของเฟสตัวจริง</h3>
                    <p>เขียนชื่อเฟสบุ๊คในกระดาษ ถ่ายพร้อมใบหน้าท่าน</p>
                    <span class="btn btn-default btn-file">เลือกภาพ<input type="file" name="images" id="images"></span>
                    <div id="response3"></div>
                </div>
            </div>
        </div>
    </div>
	
	
	
	<table class="table table-hover">
        <caption>
            ข้อมูลที่กรอกเข้ามา
        </caption>
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
	<button type="button" id="editBtn" class="btn btn-lg btn-default" onclick="">แก้ไขข้อมูล</button>
	<button type="button" class="btn btn-lg btn-default" id="backButton">ยกเลิก</button>
	
	</form>
	
	
<!-- Footer -->
<hr>
<div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-pills nav-justified">
            <li><a href="/">กระดานพระ</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Privacy</a></li>
        </ul>
    </div>
</div>	
	
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bower_components/magicsuggest/magicsuggest-min.js"></script>

<script type="text/javascript" src="bower_components/moment/min/moment.min.js"></script>
<script type="text/javascript" src="bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="bower_components/moment/locale/th.js"></script>

<script type="text/javascript" src="js/upload.js"></script>

</body>
</html>

