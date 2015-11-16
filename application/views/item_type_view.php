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
		<link rel="stylesheet" type="text/css" href="bower_components/pagePiling.js/jquery.pagepiling.css" />

		<style>
			@CHARSET "ISO-8859-1";
			/* Reset CSS
			 * --------------------------------------- */
			body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, textarea, p, blockquote, th, td {
				padding: 0;
				margin: 0;
			}
			a {
				text-decoration: none;
			}
			table {
				border-spacing: 0;
			}
			fieldset, img {
				border: 0;
			}
			address, caption, cite, code, dfn, em, strong, th, var {
				font-weight: normal;
				font-style: normal;
			}
			strong {
				font-weight: bold;
			}
			ol, ul {
				list-style: none;
				margin: 0;
				padding: 0;
			}
			caption, th {
				text-align: left;
			}
			h1, h2, h3, h4, h5, h6 {
				font-weight: normal;
				font-size: 100%;
				margin: 0;
				padding: 0;
				color: #f2f2f2;
			}
			q:before, q:after {
				content: '';
			}
			abbr, acronym {
				border: 0;
			}

			/* Custom CSS
			 * --------------------------------------- */
			body {
				font-family: 'Lato', Calibri, Arial, sans-serif;
				color: #f2f2f2;
			}
			h1 {
				font-size: 4em;
			}
			p {
				font-size: 2em;
			}
			.section {
			    margin: 0 auto;
				text-align: center;
				background-color: black;
				
			}

			/* Menu
			 * --------------------------------------- */
			#menu li {
				display: inline-block;
				margin: 10px;
				color: #000;
				background: #fff;
				background: rgba(255,255,255, 0.5);
				-webkit-border-radius: 10px;
				border-radius: 10px;
			}
			#menu li.active {
				background: #666;
				background: rgba(0,0,0, 0.5);
				color: #fff;
			}
			#menu li a {
				text-decoration: none;
				color: #000;
			}
			#menu li.active a:hover {
				color: #000;
			}
			#menu li:hover {
				background: rgba(255,255,255, 0.8);
			}
			#menu li a, #menu li.active a {
				padding: 9px 18px;
				display: block;
			}
			#menu li.active a {
				color: #fff;
			}
			#menu {
				position: fixed;
				top: 0;
				left: 0;
				height: 40px;
				z-index: 70;
				width: 100%;
				padding: 0;
				margin: 0;
			}

			.intro p {
				width: 50%;
				margin: 0 auto;
				font-size: 1.5em;
			}
			.twitter-share-button {
				position: fixed !important;
				z-index: 99;
				right: 149px;
				top: 9px;
			}
			#starGithub {
				position: fixed;
				z-index: 99;
				right: 264px;
				top: 9px;
				width: 95px;
			}

			#download {
				margin: 10px 0 0 0;
				padding: 15px 10px;
				color: #fff;
				text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
				background-color: #49afcd;
				background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
				background-image: -ms-linear-gradient(top, #5bc0de, #2f96b4);
				background-image: -webkit-gradient(linear,0 0,0 100%,from( #5bc0de),to( #2f96b4));
				background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
				background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
				background-image: linear-gradient(top, #5bc0de, #2f96b4);
				background-repeat: repeat-x;
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5bc0de', endColorstr='#2f96b4', GradientType=0);
				border-color: #2f96b4 #2f96b4 #1f6377;
				border-color: rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
				filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
				-webkit-border-radius: 6px;
				-moz-border-radius: 6px;
				border-radius: 6px;
				vertical-align: middle;
				cursor: pointer;
				display: inline-block;
				-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2), 0 1px 2px rgba(0,0,0,0.05);
				-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2), 0 1px 2px rgba(0,0,0,0.05);
				box-shadow: inset 0 1px 0 rgba(255,255,255,0.2), 0 1px 2px rgba(0,0,0,0.05);
			}
			#download a {
				text-decoration: none;
				color: #fff;
			}
			#download:hover {
				text-shadow: 0 -1px 0 rgba(0,0,0,.25);
				background-color: #2F96B4;
				background-position: 0 -15px;
				-webkit-transition: background-position .1s linear;
				-moz-transition: background-position .1s linear;
				-ms-transition: background-position .1s linear;
				-o-transition: background-position .1s linear;
				transition: background-position .1s linear;
			}
			#donations a {
				color: #333;
				color: rgba(0, 0, 0, 0.5);
				font-size: 80%;
			}
			#infoMenu {
				height: 20px;
				color: #f2f2f2;
				position: fixed;
				z-index: 70;
				bottom: 0;
				width: 100%;
				text-align: right;
				font-size: 0.9em;
				padding: 8px 0 8px 0;
			}
			#infoMenu ul {
				padding: 0 40px;
			}
			#infoMenu li a {
				display: block;
				margin: 0 22px 0 0;
				color: #333;
			}
			#infoMenu li a:hover {
				text-decoration: underline;
			}
			#infoMenu li {
				display: inline-block;
				position: relative;
			}
			#examplesList {
				display: none;
				background: #282828;
				-webkit-border-radius: 6px;
				-moz-border-radius: 6px;
				border-radius: 6px;
				padding: 20px;
				float: left;
				position: absolute;
				bottom: 29px;
				right: 0;
				width: 638px;
				text-align: left;
			}
			#examplesList ul {
				padding: 0;
			}
			#examplesList ul li {
				display: block;
				margin: 5px 0;
			}
			#examplesList ul li a {
				color: #BDBDBD;
				margin: 0;
			}
			#examplesList ul li a:hover {
				color: #f2f2f2;
			}
			#examplesList .column {
				float: left;
				margin: 0 20px 0 0;
			}
			#examplesList h3 {
				color: #f2f2f2;
				font-size: 1.2em;
				margin: 0 0 15px 0;
				border-bottom: 1px solid rgba(0, 0, 0, 0.4);
				-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);
				-moz-box-shadow: 0 1px 0 rgba(255,255,255,0.1);
				box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);
				padding: 0 0 5px 0;
			}

			/* Section 1
			 * --------------------------------------- */
			#section1 {

			}
			#section1 h1 {
				color: #FFFFFF;
			}
			#section1 p {
				color: #333;
				color: rgba(0,0,0,0.3);
			}
			#section1 img {
				margin: 0px 0;
				opacity: 0.7;
			}

			/* Section 2
			 * --------------------------------------- */
			#section2 h1, #section2 p {
				z-index: 3;
			}
			#section2 p {
				opacity: 0.8;
			}

			#section2 #colors {
				right: 60px;
				bottom: 0;
				position: absolute;
				height: 413px;
				width: 258px;
				background-image: url(imgs/colors.gif);
				background-repeat: no-repeat;
			}

			/* Section 3
			 * --------------------------------------- */
			#section3 #colors {
				left: 60px;
				bottom: 0;
			}
			#section3 p {
				color: #757575;
			}

			#colors2, #colors3 {
				position: absolute;
				height: 163px;
				width: 362px;
				z-index: 1;
				background-repeat: no-repeat;
				left: 0;
				margin: 0 auto;
				right: 0;
			}
			#colors2 {
				background-image: url(imgs/colors2.gif);
				top: 0;
			}
			#colors3 {
				background-image: url(imgs/colors3.gif);
				bottom: 0;
			}

			/* Section 4
			 * --------------------------------------- */
			#section4 p {
				opacity: 0.6;
			}

			/* Overwriting fullPage.js tooltip color
			 * --------------------------------------- */
			#pp-nav.custom .pp-tooltip {
				color: #AAA;
			}
			#markup {
				display: block;
				width: 450px;
				margin: 20px auto;
				text-align: left;
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
						<li>
							<!--
							<form class="navbar-form navbar-left" role="search">

							<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
							</div>

							<a class="btn btn-social-icon btn-facebook"> <i class="fa fa-facebook"></i> </a>
							</form>
							-->
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

		<div id="pagepiling">

			<div class="section">
				<img src="images/som5.jpg" class="img-responsive" style="width: 1000px"/>
				<div style="position: absolute;top: 100px;left: 50px">
					<h1/>299 เหรียญ</h1>
					<p>
						เหรียญสมปรารถนา เนื้อเงิน
					</p>
				</div>
			</div>
			<div class="section">
				<img src="images/_s1.jpg" class="img-responsive" style="width: 1000px" />
				<div style="position: absolute;top: 100px;left: 50px">
					<h1/>209 เหรียญ</h1>
					<p>
						เหรียญสมปรารถนา เนื้อตะกั่ว
					</p>
				</div>
			</div>
			<div class="section">
				<img src="images/som1.jpg" class="img-responsive" style="width: 800px"/>
				<div style="position: absolute;top: 100px;left: 50px">
					<h1/>3,999 เหรียญ</h1>
					<p>
						เหรียญสมปรารถนา เนื้อนวะโลหะ
					</p>
				</div>
			</div>

			<div class="section">
				<img src="images/som4.jpg" class="img-responsive" style="width: 1000px"/>
				<div style="position: absolute;top: 100px;left: 50px">
					<h1/>3,999 เหรียญ</h1>
					<p>
						เหรียญสมปรารถนา เนื้ออัลปาก้า
					</p>
				</div>
			</div>
			<div class="section">
				<img src="images/som2.jpg" class="img-responsive" style="width: 800px"/>
				<div style="position: absolute;top: 100px;left: 50px">
					<h1/>5,000 เหรียญ</h1>
					<p>
						เหรียญสมปรารถนา เนื้อทองเหลือง
					</p>
				</div>
			</div>
			<div class="section">
				<img src="images/som3.jpg" class="img-responsive" style="width: 800px"/>
				<div style="position: absolute;top: 100px;left: 50px">
					<h1/>5,000 เหรียญ</h1>
					<p>
						เหรียญสมปรารถนา เนื้อทองแดง
					</p>
				</div>
			</div>

		</div>

		<!-- Footer -->
		<!--
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

		<script type="text/javascript" src="bower_components/pagePiling.js/jquery.pagepiling.js"></script>

		<script>
			$(function() {

				$('#pagepiling').pagepiling();

			});
			//end main
		</script>

	</body>
</html>

