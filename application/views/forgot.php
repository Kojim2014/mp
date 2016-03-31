<!DOCTYPE html>
<html>
<head>
	<title>Web Media | Forgot Password</title>
	<link rel="stylesheet" href="<?php echo base_url('/assets/login/font-awesome/css/font-awesome.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css') ?>">
</head>
<body>
	<div class="apollo">
		<div class="apollo-container clearfix">
			<div class="apollo-facebook">
				<div class="apollo-image"><center><h1><span class="fa fa-lock fa-5x"></span></h1></center></div>
			</div>

			<div class="apollo-forgotten-password">
				<form class="form-signin" id="apollo-forgotten-password-form">
					<div class="control-group">
						<input type="text" value="" class="input-block-level email" placeholder="Email address"/>
					</div>
					<button class="btn btn-large btn-block btn-primary" type="submit">Reset password</button>
				</form>

				<p class="apollo-back"> <a href="index.html#"><i class="fa fa-arrow-left"></i> back to login</a> </p>
			</div>
		</div>
	</div>
</body>
</html>