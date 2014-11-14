@extends('nav')

@section('body')
  

	<div class="container">
		<div class="well">
			<div class="media-body">
				<center><h2>{{$book->getName()}}</h2></center>
				<div class="row">
			<div class="col-xs-6  col-md-6">    
                <font  color = "#00FF007"><b><h3 class="rating-num">{{$book->getavgbookrate()}}</h3></b></font>
                <div class="rating"> 

                	@for ($j=0; $j <$book->getavgbookrate() ; $j++)
                    <span class="glyphicon glyphicon-star"></span>
                    @endfor

                </div>	
			</div>
			<div class="col-xs-6  col-md-6">
					<p class="text-right"> <h3><font  color = "#00FF007">By ID {{$book->getwritername()}}</font></h3></p>
					
					</div>
			</div>
			<div class="row">
					 {{$book->getbookContext()}}
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

					<p>&nbsp &nbsp &nbsp  {{$comment[$i]->getComment()}}</p>
		
		</div>
			@endfor
			@endif
	</div>
	



@stop