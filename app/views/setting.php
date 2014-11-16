<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library</title>

    <!-- Bootstrap -->
    <link href="../../../bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../../bootflat/bootflat/css/bootflat.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body background = "../../../set.jpg">
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1><font color= "white">Account Settings</font></h1></br>
				</br>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
					<p class="text-center"><font color= "white">Use the form below to change your password and your financial details.</font></p>
				<form method="post" id="passwordForm">
					<input type="password" class="input-lg form-control" name="password" id="password" placeholder="New Password" autocomplete="off" required></br>
					<input type="text" class="input-lg form-control" name="finance" id="finance" placeholder="New Financial details" autocomplete="off" required></br>
					<input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Summit">
				</form>
			</div><!--/col-sm-6-->
		</div><!--/row-->
		
	</div>
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
  </body>
</html>