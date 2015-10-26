<div class="container" style="margin-top: 50px;">
    <!-- imgHeader -->
    <img src='images/bg01.jpg' id="imgHeader">
	
	<?php
	$attributes = array('id' => 'loginForm');
	echo form_open('member/adminlogin', $attributes);
	?>
    
    
	<div class="form-group" style="margin-top: 10px;">
		<label for="itemClosePrice">email</label><?php echo form_error('email'); ?>
		<input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?php echo set_value('email', $email); ?>"/>
	</div>
   
    <div class="form-group">
        <label for="phone">password</label><?php echo form_error('password'); ?>
        <input type="text" class="form-control" placeholder="password" id="password" name="password" value="<?php echo set_value('password', $password); ?>"/>
    </div>
	 

	<button type="submit" class="btn btn-lg btn-success" id="submitButton">
		Login
	</button>
	<button type="button" class="btn btn-lg btn-default" id="backButton">ยกเลิก</button>
	</form>

<!-- Footer -->
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
	    
		
		$("#submitButton").click(function() {

			var email = document.getElementById("email");
			var password = document.getElementById("password");
			
			if(email.value.length == 0 || password.value.length == 0){
                alert('email/password is empty');
                email.focus();
                return false;
            }

			document.forms['loginForm'].submit();

		});
		
		$("#backButton").click(function() {
			history.back();
		});

	}); 
</script>

</body>
</html>

