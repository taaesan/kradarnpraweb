<div class="container">
    
    <div>
     <div class="col-md-12 col-lg-12">
                <h2><?php echo $item_types_header -> name; ?></h2>
                 <p>พ.ศ.<?php echo $item_types_header -> year; ?></p>
        </div>   
        
    </div>

	<?php 
            $count = count($item_types);
            
		    for($i = 0; $i < $count; $i++ ){
	?>

	<?php if($i % 4 == 0){
	?>
	<div class="row">
		<!--Begin Row-->
		<div class="col-md-4 col-lg-3">
			<div class="thumbnail">
				<img src="images/som5.jpg" class="img-responsive"/>
				<h3><?php echo $item_types[$i]['type_name']; ?>
				<?php echo $item_types[$i]['batch_number']; ?> เหรียญ</h3>
			</div>
		</div>

		<?php } else { ?>

		<div class="col-md-4 col-lg-3">
			<div class="thumbnail">
				<img src="images/som5.jpg" class="img-responsive"/>
				<h3><?php echo $item_types[$i]['type_name']; ?>
				<?php echo $item_types[$i]['batch_number']; ?> เหรียญ </h3>

			</div>
		</div>

		<?php } ?>

		<?php if($i % 4 == 3 || $i == ($count - 1)){ ?>
	</div><!--End Row-->
	<?php } ?>

	<?php } ?>
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

	});
</script>

</body>
</html>

