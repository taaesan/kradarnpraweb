<div class="container" style="margin-top: 50px;">
	<!-- imgHeader -->
    <img src='images/bg01.jpg' id="imgHeader">
	<?php echo form_open('member'); ?>
	<div class="row">
		
		<div class="col-lg-6">
			<div class="input-group">
				
				<input type="text" class="form-control" id="searchText" name="searchText" placeholder="ค้นหา สมาชิก..." value="<?php echo $searchText?>" >
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit">
						ค้นหา
					</button>
				</span>
				
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
			<tr class="clickable-row" data-href="member/g/<?php echo $item['group_id']?>/<?php echo $item['member_num']?>">
				<td><?php echo $item['member_num']?></td>
				<td><?php echo $item['facebook_name']?></td>
				<td><?php echo $item['name'].' '.$item['surname']?></td>
			</tr>
			<?php endforeach; ?>
			
		</tbody>
	</table>
	
	 <div class="row">
        <div class="col-md-12 text-center">
            <?php if(!empty($links)) { ?>
            	<?php echo $links;?>
           	<?php } ?>
        </div>
    </div>
    
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
		
		
		$(".clickable-row").click(function() {
	        window.document.location = $(this).data("href");
	    });		
		

	}); 
	
	

	
</script>

</body>
</html>

