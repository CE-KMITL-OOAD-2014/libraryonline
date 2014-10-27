<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootflat/bootflat/css/bootflat.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Account Settings</h1>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
					<p class="text-center">Use the form below to change your password. Your password cannot be the same as your username.</p>
				<form method="post" id="passwordForm">
					<input type="password" class="input-lg form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off">
					<div class="row">
						<div class="col-sm-6">
							<span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> 8 Characters Long<br>
							<span id="ucase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Uppercase Letter
						</div>
						<div class="col-sm-6">
							<span id="lcase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Lowercase Letter<br>
							<span id="num" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Number
						</div>
					</div>
					<input type="password" class="input-lg form-control" name="password2" id="password2" placeholder="Repeat Password" autocomplete="off">
					<div class="row">
						<div class="col-sm-12">
							<span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Passwords Match
						</div>
					</div>
					<input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
				</form>
			</div><!--/col-sm-6-->
		</div><!--/row-->
		
	</div>
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
  </body>
</html>