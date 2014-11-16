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

  
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://templateplanet.info/tooltip.js"></script>
	<script src="http://templateplanet.info/modal.js"></script>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center><h2><font color = "#FFFF00">Book Management</font></h2></center></br>
					<div class="table-responsive">
						<table id="mytable" class="table table-bordred table-striped">
							<thead>
								<th><font color = "white">Book</font></th>
								<th><font color = "white">Edit</font></th>
								<th><font color = "white">Delete</font></th>
							</thead>
							<tbody>   
								 @if ($booklist==NULL)
                					
                    				<h3><center><font color = "white">----->>> You have no book <<<-----</font></center></center></h3></br>
                					
                				@else 
                					@for ($i=0; $i <count($booklist) ; $i++)
									
									<tr>
										<td> <class="col-md-8"> <font color = "#FF6347">{{$booklist[$i]->getName()}} </font></td>
										<td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit{{$i}}" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
										<td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete{{$i}}" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
									</tr>



										<form class="form"  action="{{url('/edit').'/'.($booklist[$i]->getId())}}" method="get">
	<div class="modal fade" id="edit{{$i}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" >
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title custom_align" id="Heading">Edit Your Book</h4>
				</div>
				<div class="modal-body">	
					<div class="form-group">
						<textarea rows="3" class="form-control" name="bookDetail" placeholder="Detail" required></textarea>
					</div>
					<div class="form-group">
						<textarea rows="13" class="form-control" name="bookContext" placeholder="Context" required></textarea>
					</div>
					<div class="form-group">
						<div class="col-md-11">
							<div class="radio">
								<label>
									<input type="radio" name="isPublic" id="optionsRadios1" value="1" checked>
									Public - Your book can access by any member.
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="isPublic" id="optionsRadios2" value="0">
									Private - Only member purchase the book.
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<input class="form-control" name="bookPrice" type="text" placeholder="Price">
					</div>
					
				</div>
				<div class="modal-footer ">
					<button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
				</div>
			</div>
		</div>
    </div>
	</form>

    <!-- delete -->
	<form class="form"  action="{{url('/delete').'/'.($booklist[$i]->getId())}}" method="get">
    <div class="modal fade" id="delete{{$i}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title custom_align" id="Heading">Delete this book</h4>
				</div>
				<div class="modal-body">
					<div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete it?</div>
				</div>
				<div class="modal-footer ">
					<button type="summit" class="btn btn-warning" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
					<button type="button" class="btn btn-warning" "close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span> No</button>
				</div>
			</div> 
		</div> 
    </div>
	</form>
									@endfor
								@endif
					
							</tbody>
						</table>
					<div class="clearfix"></div>


<div class=" container container-right" style="margin-top:40px">
	<div class="row">
      <div class="col-md-12 col-md-offset-9 col-xs-12 col-xs-offset-5">
			 <a href="../../../home"><button type="button" class="btn btn-success btn-lg"  ><span class="glyphicon glyphicon-arrow-right"></span> Back to Home &nbsp </button></a>
      </div>
	</div>
</div>
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