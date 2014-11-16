@extends('nav')

@section('body')


<div class="container">
	<div class="well">
		<div class="media-body">
			<center><h2>{{$book->getName()}}</h2></center>
			<div class="row">
				<div class="col-md-12">    
					<p class="text"> <h4><font  color = "#A52A2A">By {{$book->getwritername()}}</font></h4></p>
					
					<!-- Average point-->
					<font  color = "#A52A2A"><b><h4 class="rating-num">{{$book->getavgbookrate()}}</h4></b></font>
					<div class="rating"> 
						@for ($j=0; $j <$book->getavgbookrate() ; $j++)
						<font  color = "#A52A2A"> <span class="glyphicon glyphicon-star"></span></font>
						@endfor

					</div>	
					
				</div>
				
			</div>
			<div class="row">
				
				<!-- book context -->
				<div class="col-md-12">    
					
					<pre> {{$book->getbookContext()}} </pre>
				</div>
			</div>
		</div>	
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form role="form" action="{{url('/comment').'/'.$book->getId()}}" method="post">
					
					
					<div class="form-group">
						<textarea class="form-control" id="message" name="Comment" placeholder="enter your comment here..." rows="3" required></textarea>
					</div>
					
					<!-- rate -->
					<div class="form-group">
						<label class="col-md-2 control-label" for="name" style="margin-top:7px;"><font color = "#1E90FF">Rate this book</font></label>
						
						<select class="selectpicker"  name = "rate">
							<option value="5">5</option>
							<option value="4">4</option>
							<option value="3">3</option>
							<option value="2">2</option>
							<option value="1">1</option>
						</select>
						&nbsp &nbsp
						<button type="submit" class="btn btn-primary" >Submit</button>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<div class="container">
		@if ($comment<>NULL)
		@for ($i=0; $i <count($comment) ; $i++)
		
		<!-- comment -->
		<div class="well">

			<font size="3" color= "#1E90FF" >Comment {{$i+1}} </font> &nbsp by <font color = "#1E90FF"> {{$comment[$i]->getusername()}} </font> rated <font color = "#1E90FF"> {{$comment[$i]->getrate()}} </font>

			<pre>&nbsp &nbsp &nbsp  {{$comment[$i]->getComment()}}</pre>
			
		</div>
		@endfor
		@endif
	</div>
	



	@stop