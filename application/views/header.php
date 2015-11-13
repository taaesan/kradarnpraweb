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
			#imgHeader {
				width: auto;
				height: auto;
				max-width: 100%;
				max-height: 90%;
				margin-bottom: 10px;
			}
			.error {
				color: red;
				font-weight: bold;
				display: inline-block
			}

			/*
			 * Ajax upload image styles
			 */
			#main {
				width: 300px;
				margin: auto;
				background: #ececec;
				padding: 20px;
				border: 1px solid #ccc;
			}

			#image-list {
				list-style: none;
				margin: 0;
				padding: 0;
			}
			#image-list li {
				background: #fff;
				border: 1px solid #ccc;
				text-align: center;
				padding: 20px;
				margin-bottom: 19px;
			}

			#preview1 img {
				width: 250px;
				vertical-align: middle;
				border: 1px solid #474747;
			}
			#preview2 img {
				width: 250px;
				vertical-align: middle;
				border: 1px solid #474747;
			}
			#preview3 img {
				width: 250px;
				vertical-align: middle;
				border: 1px solid #474747;
			}

			.btn-file {
				position: relative;
				overflow: hidden;
			}
			.btn-file input[type=file] {
				position: absolute;
				top: 0;
				right: 0;
				min-width: 100%;
				min-height: 100%;
				font-size: 100px;
				text-align: right;
				filter: alpha(opacity=0);
				opacity: 0;
				outline: none;
				background: white;
				cursor: inherit;
				display: block;
			}

			.preview-box {
				/*width: 200px;*/
				height: 200px;
				position: relative;
				overflow: hidden;
				background-color: #ffffff;
				border: 1px #ddd solid;
				text-align: center;
			}
			
			
			
			
			
/* CUSTOMIZE THE NAVBAR
-------------------------------------------------- */

/* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 20;
}

/* Flip around the padding for proper display in narrow viewports */
.navbar-wrapper > .container {
  padding-right: 0;
  padding-left: 0;
}
.navbar-wrapper .navbar {
  padding-right: 15px;
  padding-left: 15px;
}
.navbar-wrapper .navbar .container {
  width: auto;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  height: 500px;
  margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel .item {
  height: 500px;
  background-color: #777;
}
.carousel-inner > .item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 500px;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 20px;
  text-align: center;
}
.marketing h2 {
  font-weight: normal;
}
.marketing .col-lg-4 p {
  margin-right: 10px;
  margin-left: 10px;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 80px 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  
  line-height: 1;
  letter-spacing: -1px;
}


		
			
			
			
			
			
			

		</style>
		
<!-- Google Analytic -->		
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

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
							<a href="member/request.html">
							<span class="label label-success">สมัครสมาชิก</span>
							</a>
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
