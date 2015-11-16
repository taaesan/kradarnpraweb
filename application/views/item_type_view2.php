<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="th">
	<head>
		<base href="<?php echo base_url() ?>">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">

		<title>กลุ่มศิษย์หลวงปู่นาม วัดน้อยชมภู่</title>

		<!-- Bootstrap core CSS -->
		<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Bootstrap theme -->
		<link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">

		<link href="bower_components/magicsuggest/magicsuggest-min.css" rel="stylesheet">

		<!-- Date picker -->
		<link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />

		<link href="bower_components/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet">

		<link rel="stylesheet" href="bower_components/bootstrap-social/bootstrap-social.css" />
		<link rel="stylesheet" href="bower_components/font-awesome-4.4.0/css/font-awesome.min.css" />

		<style>
			body {
				min-height: 2000px;
				padding-top: 60px;
			}

			/*  Bootstrap Clearfix */

			/*  Tablet  */
			@media (min-width: 767px) {

				/* Column clear fix */
				.col-lg-1:nth-child(12n+1), .col-lg-2:nth-child(6n+1), .col-lg-3:nth-child(4n+1), .col-lg-4:nth-child(3n+1), .col-lg-6:nth-child(2n+1), .col-md-1:nth-child(12n+1), .col-md-2:nth-child(6n+1), .col-md-3:nth-child(4n+1), .col-md-4:nth-child(3n+1), .col-md-6:nth-child(2n+1) {
					clear: none;
				}
				.col-sm-1:nth-child(12n+1), .col-sm-2:nth-child(6n+1), .col-sm-3:nth-child(4n+1), .col-sm-4:nth-child(3n+1), .col-sm-6:nth-child(2n+1) {
					clear: left;
				}
			}

			/*  Medium Desktop  */
			@media (min-width: 992px) {

				/* Column clear fix */
				.col-lg-1:nth-child(12n+1), .col-lg-2:nth-child(6n+1), .col-lg-3:nth-child(4n+1), .col-lg-4:nth-child(3n+1), .col-lg-6:nth-child(2n+1), .col-sm-1:nth-child(12n+1), .col-sm-2:nth-child(6n+1), .col-sm-3:nth-child(4n+1), .col-sm-4:nth-child(3n+1), .col-sm-6:nth-child(2n+1) {
					clear: none;
				}
				.col-md-1:nth-child(12n+1), .col-md-2:nth-child(6n+1), .col-md-3:nth-child(4n+1), .col-md-4:nth-child(3n+1), .col-md-6:nth-child(2n+1) {
					clear: left;
				}
			}

			/*  Large Desktop  */
			@media (min-width: 1200px) {

				/* Column clear fix */
				.col-md-1:nth-child(12n+1), .col-md-2:nth-child(6n+1), .col-md-3:nth-child(4n+1), .col-md-4:nth-child(3n+1), .col-md-6:nth-child(2n+1), .col-sm-1:nth-child(12n+1), .col-sm-2:nth-child(6n+1), .col-sm-3:nth-child(4n+1), .col-sm-4:nth-child(3n+1), .col-sm-6:nth-child(2n+1) {
					clear: none;
				}
				.col-lg-1:nth-child(12n+1), .col-lg-2:nth-child(6n+1), .col-lg-3:nth-child(4n+1), .col-lg-4:nth-child(3n+1), .col-lg-6:nth-child(2n+1) {
					clear: left;
				}
			}


		</style>

		<!-- Google Analytic -->
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] ||
				function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-32830972-1', 'auto');
			ga('send', 'pageview');

		</script>
		

	</head>

	<body>
		<nav class="navbar navbar-default navbar-fixed-top" >
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div>
						<a class="navbar-brand" href="<?php echo base_url() ?>">ศิษย์หลวงปู่นาม</a>
					</div>
				</div>

				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<!--
						<li id="menu1">
						<a href="#">หน้าแรก</a>
						</li>

						<li id="menu2">
						<a href="#about">วัตถุมงคล</a>
						</li>
						-->
						<li id="menu3">
							<a href="member.html">สมาชิกกลุ่มแบบมีหมายเลข</a>
						</li>
						<li id="menu4">
							<a href="member/request.html"> <span class="label label-success">สมัครสมาชิก</span> </a>
						</li>
						<li role="presentation" class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> วัตถุมงคล <span class="caret"></span> </a>
							<ul class="dropdown-menu">
								<li role="presentation">
									<a href="#">เหรียญสมปรารถนา</a>
								</li>
								<li role="presentation">
									<a href="#">เหรียญอายุยืน</a>
								</li>
								<li role="presentation">
									<a href="#">เหรียญเมตตามหาลาภ</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-right" role="search">
						<a class="btn btn-block btn-social btn-facebook" href="https://www.facebook.com/groups/sitluangpoonham/" title="เฟสบุ๊คกลุ่ม" target="_blank" > <i class="fa fa-facebook"></i> ศิษย์หลวงปู่นาม วัดน้อยชมภู่ </a>
						<!--
						<a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/groups/sitluangpoonham/" title="เฟสบุ๊คกลุ่ม" target="_blank"><i class="fa fa-facebook">ศิษย์หลวงปู่นาม</i></a>
						-->
					</form>
				</div><!--/.nav-collapse -->
			</div>
		</nav>


		<div class="container">

			<div class="row">
				<div class="col-md-4 col-lg-3">
					<div class="thumbnail">
						<img src="images/som5.jpg" class="img-responsive"/>
						<h2></h2>
						<p>
							Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
						</p>
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
						<a href="#">สงวนลิขสิทธิ์ ภาพถ่าย และบทความ</a>
					</li>
				</ul>
			</div>
		</div>
-->
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

		</script>

	</body>
</html>

