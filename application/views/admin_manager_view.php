<div class="container" style="margin-top: 50px;">
	<!-- imgHeader -->
	<img src='images/bg01.jpg' id="imgHeader">

	<div class="row" style="margin-top:  10px;">
		<div class="col-sm-12 col-md-12">
			<h4> <?php echo "Hi " . $_SESSION['username']; ?> <a href="member/logout">Logout</a></h4>
		</div>
	</div>

	<div class="row" style="margin-top:  10px;">
		<div class="col-md-6 col-xs-6">
			<div class="alert alert-success" id="avaliableIds" style="margin-top: 10px;"></div>
			<table id="member-table" data-toggle="table" data-show-columns="false" data-url="member/membermanagerjson.html" class="table-striped table-hover">

				<thead>
					<th data-field="id">รหัส</th>
					<th data-field="facebook_name">ชื่อเฟส</th>
					<th data-field="name">ชื่อ นามสกุล</th>
				</thead>

			</table>
		</div>

		<div class="col-md-6 col-xs-6">

			<div class="panel panel-default" style="margin-top: 10px; padding: 5px;">
				<!-- Default panel contents -->
				<div class="panel-heading">
					ข้อมูล
				</div>
				
				<div class="row" style="margin-top: 10px">
                    <div class="col-sm-3 col-md-3">
                        <button type="button" class="btn btn-lg btn-success" id="submitButton">
                            บันทึก
                        </button>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <button type="button" class="btn btn-lg btn-danger" id="deleteButton">
                            ลบข้อมูล
                        </button>
                    </div>
                </div>

				<table class="table table-hover">
					<caption>
						ข้อมูลที่กรอกเข้ามา
					</caption>
					<tbody>
						<tr>
							<td>edit link</td>
							<td><a id="editLink" href="#" target="_blank"></a></td>
						</tr>
						<tr>
							<td>หมายเลขสมาชิก</td>
							<td>
							<input type="text" id="memberNum" />
							<input type="hidden" id="memberId" />
							</td>
						</tr>
						<tr>
							<td>ชื่อเฟสบุ๊ค</td>
							<td id="fbName"></td>
						</tr>
						<tr>
							<td>ชื่อ นามสกุล</td>
							<td id="name"></td>
						</tr>
						<tr>
							<td>หมายเลขบัตรประจำตัวประชาชน</td>
							<td id="cid"></td>
						</tr>
						<tr>
							<td>เพศ</td>
							<td id="gender"></td>
						</tr>
						<tr>
							<td>วันเดือนปีเกิด</td>
							<td id="birthDate"></td>
						</tr>
						<tr>
							<td>ที่อยู่</td>
							<td id="address"></td>
						</tr>
						<tr>
							<td>เบอร์โทร</td>
							<td id="phone"></td>
						</tr>
						<tr>
							<td>ธนาคาร</td>
							<td id="bank"></td>
						</tr>

					</tbody>
				</table>

				<div class="row">
					<div class="col-xs-12 col-md-12">
						<a href="#" class="thumbnail" onclick="return false"> <img id="picture1" src="" > </a>
					</div>
					<div class="col-xs-12 col-md-12">
						<a href="#" class="thumbnail" onclick="return false"> <img id="picture2" src="" > </a>
					</div>
					<div class="col-xs-12 col-md-12">
						<a href="#" class="thumbnail" onclick="return false"> <img id="picture3" src="" > </a>
					</div>

				</div>



			</div>

		</div>

		<!-- Footer -->
		<!--
		<hr>
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
		-->

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
	<script type="text/javascript" src="bower_components/bootstrap-table/dist/bootstrap-table.min.js"></script>

	<script>
		$(function() {

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
			
		    $("#deleteButton").click(function() {

                if ($memberNum.value.length > 0 && $memberId.value.length) {
                    
                    var jsonData = {
                        "memberNum" : $memberNum.value,
                        "memberId" : $memberId.value
                    };
                    console.log(jsonData);
                    //Get avaliable ids
                    $.ajax({
                        url : "member/deleteMember",
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
             });//end deleteMember
			

			var $table = $('#member-table');

			$table.bootstrapTable({

			}).on('click-row.bs.table', function(e, row, $element) {

				//Get avaliable ids
				$.ajax({
					url : 'member/getavaliableids',
					type : "POST",
					processData : false,
					contentType : false,
					error : function() {
						console.log(arguments);
					},
					success : function(res) {
						if (res) {
							console.log(res);
							$memberNum.value = res[0].id;
							var avIds = '';
							for ( i = 0; i < res.length; i++) {
								avIds = avIds + ", " + res[i].id
							}
							$avaliableIds.text(avIds);
						}
					}
				});

				$editLink.href = 'member/uploaddoc/' + row.id + '.html';
				$editLink.innerHTML = row.id;
				$fbName.innerHTML = row.facebook_name;
				$name.innerHTML = row.name;
				$cid.innerHTML = row.cid;
				$gender.innerHTML = row.gender;
				$birthDate.innerHTML = row.birth_date;
				$address.innerHTML = row.address;
				$phone.innerHTML = row.phone_number;
				$bank.innerHTML = row.bank_name;
				$memberId.value = row.id;

				if (row.picture1.length > 0) {
					$picture1.style.visibility = 'visible';
					$picture1.src = row.picture1;
				} else {
					$picture1.style.visibility = 'hidden';
				}

				if (row.picture2.length > 0) {
					$picture2.style.visibility = 'visible';
					$picture2.src = row.picture2;
				} else {
					$picture2.style.visibility = 'hidden';
				}

				if (row.picture3.length > 0) {
					$picture3.style.visibility = 'visible';
					$picture3.src = row.picture3;
				} else {
					$picture3.style.visibility = 'hidden';
				}

			}).on('load-success.bs.table', function(e, data) {
				console.log(data);
			});
			//end row click

		});
		//end main
	</script>

	</body>
	</html>

