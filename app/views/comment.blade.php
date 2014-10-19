<!DOCTYPE html>
<html>
	<head>
		<title> WORKSHOP </title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body>
		
		<div class="container">

			<div class="row">
				<div class="panel panel-info">
					<div class="panel-heading">profile</div>
					<div class="panel-body">
						<div class="col-md-6 " >
							<img src="123.jpg" width="100" height="100">
						</div>
						<div class="col-md-2 ">
							<span class="col-md-12 label label-danger">NAME</span> <br>
							<span class="col-md-12 label label-danger">SURNAME</span> <br>
							<span class="col-md-12 label label-danger">AGE</span> <br>
							<span class="col-md-12 label label-danger">LIKE</span> <br>
							<span class="col-md-12 label label-danger">HATE</span> <br>
						</div>		
						<div class="col-md-4 ">
							Napatthra <br>
							Pholnaruk <br>
							20 <br>
							sleep <br>
							dog <br>
						</div>	
					</div>
				</div>
				
				
				<div class="panel panel-info">
					<div class="panel-heading">comment</div>
					<div class="panel-body">
						<table class="col-md-12" border="5">
							<form action="{{url('/')}}" method="POST">
								<tr>
									<td>Name</td>
									<td><input type="text" class="form-control" name="user"></td>
								</tr>
								<tr>
									<td>Comment</td>
									<td><input type="text" class="form-control" name="comment"></td>
								</tr>
								<tr>
									<td>Feeling</td>
									<td><input type="radio" checked name="feeling" value="Male">Male<br>
									<input type="radio" name="feeling" value="Female">Female<br></td>
								</tr>
								<tr>
									<td>submit</td>
									<td><button type="submit" class="btn btn-warning">submit</button></td>
								</tr>
							</form>
						</table>	
					</div>
				</div>
				
				<div>
					<h2>Comments</h2>
					@foreach($comments as $comment)
					<div>
						<header>
							{{$comment->user}} is feeling
								{{$comment->feeling}}
							({{$comment->created_at}})
						</header>
						<div>{{$comment->comment}}</div>
					</div>
					<hr>
					@endforeach
				</div>
				
			</div>
		</div>

		
	</body>
</html>