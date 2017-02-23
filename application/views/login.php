<div class="main">
<div class="about_banner_img"><img src="images/about_img.jpg" class="img-responsive" alt=""/></div>
          <div class="login_top">
          	<div class="container">
			  <div class="col-md-6">
				 <div class="login-page">
					<h4 class="title">New Customers</h4>
					<p>This exciting service offers  members a training and exercise programme tailored to your individual needs to help you reach your fitness goals​ </p>
					<div class="button1">
					   <a href="register"><input type="submit" name="Submit" value="Contact"></a>
					 </div>
					 <div class="clear"></div>
				  </div>
				</div>
				<div class="col-md-6">
				 <div class="login-page">
				  <div class="login-title">
	           		<h4 class="title">Registered Customers</h4>
					<div id="loginbox" class="loginbox">
						<?php echo validation_errors(); ?>
   <?php echo form_open('VerifyLogin'); ?>
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>User name</label>
						      <input id="user_name" type="text" name="user_name" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>Password</label>
						      <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <div class="remember">
							    <p id="login-form-remember">
							      <label for="modlgn_remember"><a href="#">Forget Your Password ? </a></label>
							   </p>
							    <input type="submit" name="Submit" class="button" value="Login"><div class="clear"></div>
							 </div>
						  </fieldset>
						 </form>
					</div>
			      </div>
				</div>
				<div class="clear"></div>
			  </div>
			</div>
		  </div>
         </div>