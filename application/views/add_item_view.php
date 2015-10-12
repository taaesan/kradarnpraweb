		<div class="container" style="margin-top: 100px;">
		<?php echo form_open('item/add'); ?>
		
			  <div class="form-group">
			    <label for="itemGroup">ประเภท</label>
			    <?php echo form_error('itemGroup'); ?>
				<select class="form-control" id="itemGroup" name="itemGroup" value="<?php echo set_value('itemGroup'); ?>">
					<?php foreach($item_types as $item):?>
						<option value="<?php echo $item['id'];?>"><?php echo $item['type_name'];?></option>
					<?php endforeach;?>
				</select>
			  </div>	
				
			  <div class="form-group">
			  	<label for="closeDate">วันที่ปิดประมูล</label>
			  	<?php echo form_error('closeDate'); ?>
			  	<div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" id="closeDate" name="closeDate" />
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
			    <?php echo form_error('itemLink'); ?>
			    <input type="text" class="form-control" id="itemLink" name="itemLink" placeholder="ลิ้งค์รายการประมูล">
			  </div>
			  
			  <div class="form-group">
			    <label for="itemSellerId">สมาชิกผู้เปิดประมูล</label>
			    <?php echo form_error('itemSellerId'); ?>
			    <input type="text" class="form-control" id="itemSellerId" name="itemSellerId" placeholder="รหัสสมาชิก">
			  </div>
			  
			  <button type="submit" class="btn btn-default">บันทึก</button>
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
			
			var members_json = <?php echo $members; ?>;
			
			$('#datetimepicker1').datetimepicker({
			 	format:'DD/MM/YYYY',
			 	locale:'th'
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
			
			/*
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
    		 */
    		 
    		 
			 
    		 
		});
		</script>
		
	</body>
</html>



