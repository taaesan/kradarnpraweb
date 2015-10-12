<div class="container" style="margin-top: 100px;">
	<?php echo form_open('member/search'); ?>
	<div class="row">

		<div class="col-lg-6">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="ค้นหา สมาชิก...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">
						Go!
					</button> </span>
			</div><!-- /input-group -->
		</div><!-- /.col-lg-6 -->

	</div>
	</form>
	<table class="table table-hover">
		<caption>
			สมาชิกแบบมีหมายเลข
		</caption>
		<thead>
			<th>รหัส</th>
			<th>ชื่อเฟส</th>
			<th>ชื่อ นามสกุล</th>
		</thead>
		<tbody>
			
			<?php foreach($result as $item):?>
			<tr>
				<td><?php echo $item['MEMBER_NUM']?></td>
				<td><?php echo $item['FACEBOOK_NAME']?></td>
				<td><?php echo $item['NAME'].' '.$item['SURNAME']?></td>
			</tr>
			<?php endforeach; ?>
			
		</tbody>
	</table>
	
	<!--
		<?php var_dump($config);?>
	-->
	
	 <div class="row">
        <div class="col-md-12 text-center">
            <?php echo $links;?>
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

		
		/*

		 $('#datetimepicker1').datetimepicker({
		 format : 'DD/MM/YYYY',
		 locale : 'th'
		 });

		 $('#itemSellerId').magicSuggest({
		 allowDuplicates : false,
		 allowFreeEntries : false,
		 maxSelection : 1,
		 placeholder : 'รหัสสมาชิก หรือ ชื่อเฟส',
		 data : members_json,
		 valueField : 'member_num',
		 displayField : 'facebook_name',
		 renderer : function(data) {
		 return data.member_num + ' (<b>' + data.facebook_name + '</b>)';
		 },
		 resultAsString : true

		 });

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

