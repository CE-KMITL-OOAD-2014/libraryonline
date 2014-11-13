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
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center><h3><font color = "#1E90FF">Book Request</font></h3></center>
					<div class="table-responsive">
						<table id="mytable" class="table table-bordred table-striped">
							<thead>
								<th>Your request</th>
								<th>Accept</th>
								<th>Discard</th>
							</thead>

							<tbody>  
								
								@if ($request==NULL)
     								<tr class="primary">
     								<td><h1><center><font color = "RED">No request!!!</font></center></center></h1></td>
     								</tr>
								@else 
								@for ($i=0; $i <count($request) ; $i++)

								<tr>
									<td class="col-md-8"><h4><font color = "#1E90FF">{{$request[$i]->getbookId()}}</font> &nbsp  &nbsp  from member  &nbsp  &nbsp <font color = "#FF1493">{{$request[$i]->getuserId()}}</font></h4></td> 
									
										<td><a href = "{{url('/accept').'/'.$request[$i]->getuserId().'/'.$request[$i]->getbookId()}}" <p> &nbsp &nbsp <button class="btn btn-success btn-xs" ><span class="glyphicon glyphicon-ok"></span></button></p></a></td>
									
									
										<td><a href = "{{url('/canclereq').'/'.$request[$i]->getuserId().'/'.$request[$i]->getbookId()}}" <p> &nbsp &nbsp <button class="btn btn-danger btn-xs" ><span class="glyphicon glyphicon-remove"></span></button></p></a></td>
									


									
								@endfor
								@endif
								 
							</tbody>
						</table>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div> 


    
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
  </body>
</html>