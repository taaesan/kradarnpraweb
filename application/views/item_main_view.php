<div class="container">
	<!-- imgHeader -->

	<?php if($this->session->userdata('loggedin')){
	?>
	<div class="row form-group">
		<div class="col-sm-12 col-md-12">
			<h4> <?php echo "Hi " . $_SESSION['username']; ?> <a href="member/logout">Logout</a></h4>
			
			<form action="item/do_upload" method="post" enctype="multipart/form-data">
			    <div class="form-group">
                    <label for="itemClosePrice">ชื่อวัตถุมงคล</label>
                    <input type="text" class="form-control" id="itemName" name="itemName" value=""/>
                </div> 
                <div class="form-group">
                    <label for="itemClosePrice">รายละเอียด</label>
                    <input type="text" class="form-control" id="desc" name="desc" value=""/>
                </div> 
                <div class="form-group">
                    <label for="itemClosePrice">ปี</label>
                    <input type="text" class="form-control" id="year" name="year" value=""/>
                </div> 
                <div class="form-group">
                    <label for="itemClosePrice">รูป</label>
                    <span class="btn btn-default btn-file">เลือกภาพ<input type="file" name="images" id="images"></span>
                </div>                                 
                
                <div class="form-group">
			    <button type="submit" class="btn btn-default">Add</button>
			    </div>
			</form>
			
		</div>
	</div>
	<?php } ?>

    <?php 
            $count = count($item_type_main);
            
            for($i = 0; $i < $count; $i++ ){
    ?>

        <?php if($i % 2 == 0){?>
    	   <div class="row form-group">
        <?php } ?>

            <div class="col-xs-12 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-image">
                        <img src="<?php echo $item_type_main[$i]['picture1']; ?>" class="panel-image-preview" />
                    </div>
                    <div class="panel-body">
                        <a href="item/itemtype/<?php echo $item_type_main[$i]['id']; ?>">รายการจัดสร้างแต่ละเนื้อ</a>
                        <p><?php echo $item_type_main[$i]['desc']; ?></p>
                    </div>
                    <div class="panel-heading text-center">
                        <b><?php echo $item_type_main[$i]['name']; ?></b>
                    </div>
                </div>
            </div>


        <?php if($i % 2 == 1 || $i == ($count - 1)){ ?>
            </div><!--End Row-->
        <?php } ?>

    <?php } ?>	
	

	<!-- Footer -->
	<div class="row">
		<div class="col-lg-12">
			<ul class="nav nav-pills nav-justified">
				<li>
					<a href="/">กระดานพระ</a>
				</li>
				<li>
					<a href="#">Terms of Service</a>
				</li>
				<li>
					<a href="#">Privacy</a>
				</li>
			</ul>
		</div>
	</div>
</div><!--End container-->

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
<script type="text/javascript" src="bower_components/bootstrap-table/dist/bootstrap-table.min.js"></script>
<script src="bower_components/Chart.js/Chart.js"></script>

<script src="bower_components/highcharts/highcharts.js"></script>
<script src="bower_components/highcharts/themes/dark-unica.js"></script>

<script>
	$(function() {

		$('#menu5').addClass("active");

		/*
		var $fbName = document.getElementById('fbName');
		var $name = document.getElementById('name');
		var $cid = document.getElementById('cid');
		var $gender = document.getElementById('gender');
		var $birthDate = document.getElementById('birthDate');
		var $address = document.getElementById('address');
		var $phone = document.getElementById('phone');
		var $bank = document.getElementById('bank');
		var $picture1 = document.getElementById('picture1');
		var $picture2 = document.getElementById('picture2');
		var $picture3 = document.getElementById('picture3');
		var $memberNum = document.getElementById('memberNum');
		var $memberId = document.getElementById('memberId');
		var $editLink = document.getElementById('editLink');
		var $avaliableIds = $('#avaliableIds');
		var $data = {};

		$("#submitButton").click(function() {

		if ($memberNum.value.length > 0 && $memberId.value.length) {

		var jsonData = {
		"memberNum" : $memberNum.value,
		"memberId" : $memberId.value
		};
		console.log(jsonData);
		//Get avaliable ids
		$.ajax({
		url : "member/approve",
		type : "POST",
		dataType : 'json',
		data : jsonData,
		error : function(e) {
		console.log(JSON.stringify(e, null, 4));
		},
		success : function(res) {
		if (res) {

		$fbName.innerHTML = '';
		$name.innerHTML = '';
		$cid.innerHTML = '';
		$gender.innerHTML = '';
		$birthDate.innerHTML = '';
		$address.innerHTML = '';
		$phone.innerHTML = '';
		$bank.innerHTML = '';
		$memberId.value = '';
		$picture1.src = '';
		$picture2.src = '';
		$picture3.src = '';

		$table.bootstrapTable("load", res);
		}
		}
		});
		}

		});

		var $table = $('#member-table');

		$table.on('post-body.bs.table', function() {
		$table.bootstrapTable('mergeCells', {
		index : 0,
		field : 'type_group',
		rowspan : 6
		});
		});
		*/

		/*
		var data = {
		labels: ["January", "February", "March", "April", "May", "June", "July"],
		datasets: [
		{
		label: "My Second dataset",
		fillColor: "rgba(151,187,205,0.2)",
		strokeColor: "rgba(151,187,205,1)",
		pointColor: "rgba(151,187,205,1)",
		pointStrokeColor: "#fff",
		pointHighlightFill: "#fff",
		pointHighlightStroke: "rgba(151,187,205,1)",
		data: [28, 48, 40, 19, 86, 27, 90]
		}
		]
		};

		var options = {
		maintainAspectRatio: true,
		responsive: true
		};

		// Get context with jQuery - using jQuery's .get() method.
		var ctx = $("#myChart").get(0).getContext("2d");
		var myLineChart = new Chart(ctx).Line(data, options);
		*/

		//Begin Hichart
		/*
		 var chart = new Highcharts.Chart({

		 chart: {
		 renderTo: 'container',
		 type: 'spline',
		 events: {
		 load: requestData
		 }},
		 title: {
		 text: 'รายการประมูล เหรียญสมปรารถนา 2558',
		 x: -20 //center
		 },
		 subtitle: {
		 text: '',
		 x: -20
		 },
		 xAxis: {
		 categories: ['มค', 'กพ', 'มีค', 'เมย', 'พค', 'มิย',
		 'กค', 'สค', 'กย', 'ตค', 'พย', 'ธค']
		 },
		 yAxis: {
		 title: {
		 text: ' จำนวณ(องค์) '
		 },
		 plotLines: [{
		 value: 0,
		 width: 1,
		 color: '#808080'
		 }],
		 tickInterval:1
		 },
		 tooltip: {
		 valueSuffix: ' องค์ '
		 },
		 legend: {
		 layout: 'vertical',
		 align: 'right',
		 verticalAlign: 'middle',
		 borderWidth: 0
		 },
		 series: []
		 });//end highChart

		 function requestData() {
		 $.ajax({
		 url: 'item/itemscurrentyear',
		 type: "GET",
		 dataType: "json",
		 success: function(data) {

		 $.each(data, function() {
		 //console.log(this.type_name +' '+this.data);
		 chart.addSeries({
		 name: this.type_name,
		 data: $.parseJSON(this.data)
		 });
		 });},
		 cache: false
		 });
		 }
		 */

	});
	//end main
</script>

</body>
</html>

