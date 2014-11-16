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
	
	<marquee><h2>On-line Library is available now <small> Do you want to read some books?</small></h2></marquee>
		<img src="booktop.jpg" class="img-responsive" alt="Responsive image">
	
	<div class="jumbotron" style = "background-color: #FFF">
		<div class="container" >
			<div class = "row">
				<div class = "col-md-6">
					<p><font color = "DodgerBlue"><h2>Welcome to on-line Library</h2></font></p>
					<p> &nbsp &nbsp &nbsp  This is free website for everyone. You can read any book on condition that the writer allow you.
						For private books, you can access the books by purchase and the process is simple. Also you can be a writer, just create your own book. Let release your imagination here!!!</p>
						<p><a class="btn btn-primary btn-lg " href="../../../home" role="button">Home Page &nbsp <span class="glyphicon glyphicon-arrow-right"></span></a></p>
				</div>
				<div class = "col-md-6">
					<div class="container" style="margin-top:40px">			
						<div class="panel panel-default">
							<div class="panel-heading">
								<strong> Sign in to continue</strong>
							</div>
							<div class="panel-body">
								<form role="form" action="/firstpage" method="post">
									<fieldset>
										<div class="row">
											<center><img class="../../../profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt=""></center>
										</div>							
										<div class="row">
											<div class="col-sm-12 col-md-10  col-md-offset-1 ">
												<div class="form-group">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="glyphicon glyphicon-user"></i>
														</span> 
														<input class="form-control" placeholder="Username" name="userName" type="text" autofocus>
													</div>
												</div>
												<div class="form-group">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="glyphicon glyphicon-lock"></i>
														</span>
														<input class="form-control" placeholder="Password" name="password" type="password" value="">
													</div>
												</div>
												<div class="form-group">
													<input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
												</div>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
							<div class="panel-footer ">
								Don't have an account! <a href="signup" onClick=""> Sign Up Here </a>
							</div>
						</div>		
					</div>
				</div>
			</div>
		</div>
	</div>

	<center>© Copyright 2014 ~ Bootstrap</center></br>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
  </body>
</html>