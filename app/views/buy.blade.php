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
  <body>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://templateplanet.info/tooltip.js"></script>
	<script src="http://templateplanet.info/modal.js"></script>
  
  <div class="container" style="margin-top:40px">
	<div class="row">
      <div class="col-md-12">
		
				<legend class="text-center"><h3><font color = "RED">You are not allow to read this book!!!</font></h3></legend>
					<div class="alert alert-default"><span class="glyphicon glyphicon-info-sign"></span> You have to buy the book first. Do you want to buy this book?</div>
			<div class="col-md-3" "col-md-offset-2">
				<p><button class="btn btn-success btn-lg"  style="width: 50%;" data-title="Buy" data-toggle="modal" data-target="#buy" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</button></p>
			</div>
			<div class="col-md-3" "col-md-offset-2">
				<a href = "../../home" <button type="button" class="btn btn-warning btn-lg"  style="width: 50%;"><span class="glyphicon glyphicon-remove"></span> No</button></a>
			</div>
				
					<div class="modal fade" id="buy" tabindex="-1" role="dialog" aria-labelledby="buy" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h4 class="modal-title custom_align" id="Heading">Buy the book</h4>
								</div>
								<div class="modal-body">
									<div class="alert alert-warning"><span class="glyphicon glyphicon-exclamation-sign"></span> Are you sure that you want to buy this book?</div>
								</div>
								<div class="modal-footer ">
									<a href = {{url('/finance').'/'.$id}} <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button></a>
									<button type="button" class="btn btn-danger "  close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span> No</button>
								</div>
							</div> 
						</div> 
					</div>
				
		
        </div>
    </div>
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    
    <!-- JavaScrip Search Plugin -->
    <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
  </body>
</html>