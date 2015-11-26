<div class="container">
    
    <div class="row form-group">
        <div class="col-xs-12 col-lg-12">
            <!--
            <div class="panel panel-default">
                <div class="panel-heading">
                -->
                    <a href="item.html"><?php echo $item_types_header -> name; ?></a>
                <!--</div>
            </div>  --> 
        </div>
    </div>
    
    <!--
    <div class="row form-group">
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-image">
                    <img src="images/som3.jpg" class="panel-image-preview" />
                </div>
                <div class="panel-body">
                    <h4>เหรียญสมปรารถนา</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.
                    </p>
                </div>
                <div class="panel-footer text-center">
                    <a href="#share">รายการจัดสร้าง</a>
                </div>
            </div>
        </div>
    </div>    
    -->

	<?php 
            $count = count($item_types);
            
		    for($i = 0; $i < $count; $i++ ){
	?>

	<?php if($i % 4 == 0){?>
	<div class="row form-group">
		<!--Begin Row-->
		<div class="col-xs-12 col-md-4 col-lg-3">
			<div class="panel panel-default">
			    <div class="panel-image">
				    <img src="images/som5.jpg" class="panel-image-preview"/>
				</div>
				<div class="carousel-caption" style="padding-bottom: 50px"><h4><?php echo $item_types[$i]['batch_number']; ?> เหรียญ</h4></div>
				<div class="panel-footer text-center">
				<b><?php echo $item_types[$i]['type_name']; ?></b></div>
			</div>
		</div>

		<?php } else { ?>

        <div class="col-xs-12 col-md-4 col-lg-3">
            <div class="panel panel-default">
                <div class="panel-image">
                    <img src="images/som5.jpg" class="panel-image-preview"/>
                </div>
                <div class="carousel-caption" style="padding-bottom: 50px"><h4><?php echo $item_types[$i]['batch_number']; ?> เหรียญ</h4></div>
                <div class="panel-footer text-center">
				<b><?php echo $item_types[$i]['type_name']; ?></b>
                </div>
			</div>
		</div>

		<?php } ?>

		<?php if($i % 4 == 3 || $i == ($count - 1)){ ?>
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
	$(function() {
	    $('#menu5').addClass("active");

	}); 
</script>

</body>
</html>

