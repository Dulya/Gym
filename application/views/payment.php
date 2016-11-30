

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Power Fitness Gym</title>
    <link rel="stylesheet" href=" http://[::1]/Gym/neon/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
    <link rel="stylesheet" href=" http://[::1]/Gym/neon/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
    <link rel="stylesheet" href=" http://[::1]/Gym/neon/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
    <link rel="stylesheet" href="http://[::1]/Gym/neon/css/neon.css"  id="style-resource-5">
    <link rel="stylesheet" href=" http://[::1]/Gym/neon/css/custom.css"  id="style-resource-6">

    	
	<script src="http://[::1]/Gym/admin_js/eakroko.min.js"></script>
	
	<script src="http://[::1]/Gym/admin_js/application.min.js"></script>
	
	<script src="http://[::1]/Gym/admin_js/demonstration.min.js"></script>

    <script src="http://[::1]/Gym/neon/js/jquery-1.10.2.min.js"></script>

	<script src="http://[::1]/Gym/admin_js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="http://[::1]/Gym/admin_js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="http://[::1]/Gym/admin_js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="http://[::1]/Gym/admin_js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="http://[::1]/Gym/admin_js/plugins/jquery-ui/jquery.ui.spinner.js"></script>
	<script src="http://[::1]/Gym/admin_js/plugins/jquery-ui/jquery.ui.slider.js"></script>


    <script type="text/javascript">
		$(document).ready(function()
		{
		$(".country").change(function()
		{
		var id=$(this).val();
		var dataString = 'id='+ id;

		$.ajax
		({
		type: "POST",
		url: "ajax_city.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$(".city").html(html);
		} 
		});

		});
		});
		    </script>
		<script type="text/javascript">
		$(document).ready(function()
		{
		$(".country1").change(function()
		{
		var id=$(this).val();
		var dataString = 'id='+ id;

		$.ajax
		({
		type: "POST",
		url: "ajax_city1.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$(".city1").html(html);
		} 
		});

		});
		});
    </script>


    <SCRIPT LANGUAGE="JavaScript">
		function checkIt(evt) {
		    evt = (evt) ? evt : window.event
		    var charCode = (evt.which) ? evt.which : evt.keyCode
		    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		        status = "This field accepts numbers only."
		        return false
		    }
		    status = ""
		    return true
		}
	</SCRIPT>

	<script type="text/javascript" src="webcam.js"></script>

</head>
    <body class="page-body  page-fade">

    	<div class="page-container">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="main.php">
					<img src="img/logo.png" alt="" width="192" height="80" />
				</a>
			</div>
			
					<!-- logo collapse icon -->
					<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<!-- Raw Links -->
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							<li>Welcome <?php //echo $_SESSION['user_name']; ?> 
							</li>						
						
							<li>
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

		

		<hr />
		<h2>Payments</h2>
		<form role="form" action="" method="post" class="form-horizontal form-groups-bordered">
					
<div class="form-group">		
					
			</div>
		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>
					<th>Member ID</th>
					<th>Plan Type</th>
					<th>Trainer ID</th>
					<th>Payment Status</th>
					<th>Action</th>
				</tr>
			</thead>

				<tbody>
					<?php if((sizeof($payments))>0){
					foreach($payments as $row){
						$msgid   = $row->member_id;;
			echo '<tr>';
			echo '<td>'.$row->member_id.'</td>';
			echo '<td>'.$row->plan_type.'</td>';
			echo '<td>'.$row->trainer_id.'</td>';
			echo '<td>'.$row->payment.'</td>';	
				echo "<td><form action='make_payments.php' method='post'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Add Payment ' class='btn btn-info'/></form></td></tr>";
				 $msgid = 0;
					}}?>				
									
				</tbody>

		</table>
		</form>
		
		
			<?php //include('footer.php'); ?>
    	</div>


    <script src="http://[::1]/Gym/neon/js/gsap/main-gsap.js" id="script-resource-1"></script>
    <script src="http://[::1]/Gym/neon/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
    <script src="http://[::1]/Gym/neon/js/bootstrap.min.js" id="script-resource-3"></script>
    <script src="http://[::1]/Gym/neon/js/joinable.js" id="script-resource-4"></script>
    <script src="http://[::1]/Gym/neon/js/resizeable.js" id="script-resource-5"></script>
    <script src="http://[::1]/Gym/neon/js/neon-api.js" id="script-resource-6"></script>
    <script src="http://[::1]/Gym/neon/js/jquery.validate.min.js" id="script-resource-7"></script>
    <script src="http://[::1]/Gym/neon/js/neon-login.js" id="script-resource-8"></script>
    <script src="http://[::1]/Gym/neon/js/neon-custom.js" id="script-resource-9"></script>
    <script src="http://[::1]/Gym/neon/js/neon-demo.js" id="script-resource-10"></script>

        <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
    </script>
    </body>
</html>


