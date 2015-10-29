<div class="container" style="margin-top: 50px;">
    <!-- imgHeader -->
	<img src='images/bg01.jpg' id="imgHeader">

	<ul class="nav nav-pills">
	  <li role="presentation"><a href="<?php echo base_url().'member/request/'.$memberRow->id ?>">1. ข้อมูลสมาชิก</a></li>
	  <li role="presentation" class="active"><a href="#" onclick="return false;">2. ส่งเอกสาร และ ตรวจสอบข้อมูล</a></li>
	</ul>
	
	<input type="hidden" name="id" id="id" value="<?php if(!empty($memberRow)) {echo $memberRow->id;} ?>" />
	
	<div class="row" style="margin-top:  10px;">
	    <div class="col-sm-12 col-md-12">
            <h2>อัพโหลดเอกสารต่อไปนี้</h2>
        </div>
	</div>
	<div class="row">
    	<div class="col-sm-6 col-md-4">
        	<div class="thumbnail">
                <div id="preview1" class="preview-box">
                    <?php if(!empty($memberRow -> picture1)) { ?>
                        <img src="<?php echo $memberRow->picture1; ?>"/>
                    <?php }?>
                </div>
                <div class="caption">
                    <h3>ภาพบัตรประชาชน</h3>
                    <p>ปิดหมายเลขบัตร วันเดือนปีเกิด ด้วยนะครับ</p>
                    <span class="btn btn-default btn-file">เลือกภาพ<input type="file" name="image1" id="image1"></span>
                    <a data-toggle="modal" data-target="#myModal1">ตัวอย่าง</a>
                    <div id="response1"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div id="preview2" class="preview-box">
                    <?php if(!empty($memberRow -> picture2)) { ?>
                        <img src="<?php echo $memberRow->picture2; ?>"/>
                    <?php }?>                    
                </div>
                <div class="caption">
                    <h3>ภาพหน้าแรกบัญชีธนาคาร</h3>
                    <p>ชื่อบัญชีตรงกับบัตรประชาชน</p>
                    <span class="btn btn-default btn-file">เลือกภาพ<input type="file" name="image2" id="image2"></span>
                    <a data-toggle="modal" data-target="#myModal1">ตัวอย่าง</a>
                    <div id="response2"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div id="preview3" class="preview-box">
                    <?php if(!empty($memberRow -> picture3)) { ?>
                        <img src="<?php echo $memberRow->picture3; ?>"/>
                    <?php }?>                    
                    
                </div>
                <div class="caption">
                    <h3>ภาพเจ้าของเฟสตัวจริง</h3>
                    <p>เขียนชื่อเฟสบุ๊คในกระดาษ ถ่ายพร้อมใบหน้าท่าน</p>
                    <span class="btn btn-default btn-file">เลือกภาพ<input type="file" name="image3" id="image3"></span>
                    <a data-toggle="modal" data-target="#myModal1">ตัวอย่าง</a>
                    <div id="response3"></div>
                </div>
            </div>
        </div>
    </div>
	
	<div class="row">
        <div class="col-sm-12 col-md-12">
            <h2>ตรวจสอบข้อมูล</h2>
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
                <td><?php echo $memberRow->facebook_name; ?> </td>
            </tr>
            <tr>
                <td>ชื่อ นามสกุล</td>
                <td><?php echo $memberRow->name; ?> <?php echo $memberRow->surname; ?></td>
            </tr>
            <tr>
                <td>หมายเลขบัตรประจำตัวประชาชน</td>
                <td><?php echo $memberRow->cid; ?></td>
            </tr>
            <tr>
                <td>เพศ</td>
                <td><?php echo $memberRow->gender; ?></td>
            </tr>  
            <tr>
                <td>วันเดือนปีเกิด</td>
                <td><?php echo $memberRow->birth_date; ?></td>
            </tr>            
            <tr>
                <td>ที่อยู่</td>
                <td><?php echo $memberRow->address; ?> <?php echo $memberRow->province_name; ?></td>
            </tr> 
            <tr>
                <td>เบอร์โทร</td>
                <td><?php echo $memberRow->phone_number; ?></td>
            </tr>                              
            <tr>
                <td>ธนาคาร</td>
                <td><?php echo $memberRow->bank_name; ?> <?php echo $memberRow->bank_account_number; ?></td>
            </tr>
            <?php } ?>
            
        </tbody>
    </table>

	<button type="button" class="btn btn-lg btn-success" id="submitButton" onclick="save()">
		ส่งข้อมูล
	</button>
	<button type="button" id="editBtn" class="btn btn-lg btn-default" onclick="editdata()">แก้ไขข้อมูล</button>
	
	</form>
	
	
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







<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel1">ตัวอย่างเอกสารสมัครสมาชิก</h4>
      </div>
      <div class="modal-body">
        
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <h4>ภาพบัตรประชาชน และ ภาพหน้าแรกบัญชีธนาคาร</h4>
            <a href="#" class="thumbnail" onclick="return false">
              <img src="images/taaesan_id2.jpg" alt="ภาพบัตรประชาชน และ ภาพหน้าแรกบัญชีธนาคาร">
            </a>
          </div>
        </div>
        
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <h4>ภาพเจ้าของเฟสตัวจริง</h4>
            <a href="#" class="thumbnail" onclick="return false">
              <img src="images/taae.kradarnpra.jpg" alt="ภาพเจ้าของเฟสตัวจริง">
            </a>
          </div>
        </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
      </div>
    </div>
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

<script>
    
function editdata(){
    location.href = '<?php echo base_url().'member/request/'.$memberRow->id ?>';
}

function save(){
    location.href = '<?php echo base_url().'member.html'?>';
}     
    
</script>

</body>
</html>

