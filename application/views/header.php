<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="<?php echo base_url() ?>">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Heder</title>

		<!-- Bootstrap core CSS -->
		<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Bootstrap theme -->
		<link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
		
		<link href="bower_components/magicsuggest/magicsuggest-min.css" rel="stylesheet">
		
		<!-- Date picker -->
	  	<link rel="stylesheet" href="bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
		
		<style>
			#imgHeader {
				width: auto;
				height: auto;
				max-width: 100%;
				max-height: 90%;
				margin-bottom: 10px;
			}
			.error{
				color:red;
				font-weight: bold;
				display: inline-block
			}
			
			/*
			 * Ajax upload image styles
			 */
			#main {
                width: 300px;
                margin:auto;
                background: #ececec;
                padding: 20px;
                border: 1px solid #ccc;
            }
            
            #image-list {
                list-style:none;
                margin:0;
                padding:0;
            }
            #image-list li {
                background: #fff;
                border: 1px solid #ccc;
                text-align:center;
                padding:20px;
                margin-bottom:19px;
            }
            #preview1 img {
                width: 250px;
                vertical-align: middle;
                border:1px solid #474747;
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
            
            .preview-box{
                /*width: 200px;*/
                height: 200px;
                position: relative;
                overflow: hidden;
                background-color: #ffffff;
                border: 1px #ddd solid;
                text-align: center;
            }          
            

		</style>

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
					<a class="navbar-brand" href="#">ศิษย์หลวงปู่นาม</a>
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
							<a href="member.html">สมาชิกกลุ่ม</a>
						</li>
						<li id="menu4">
							<a href="member/request.html">สมัครสมาชิก</a>
						</li>
						
						<!--li>
							<form class="navbar-form navbar-left" role="search">
							  <div class="form-group">
							    <input type="text" class="form-control" placeholder="Search">
							  </div>
							  <button type="submit" class="btn btn-default">Submit</button>
							</form>
						</li-->
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>




