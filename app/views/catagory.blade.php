@extends('nav')

@section('body')



<!-- First and head-->
<div class="row">

	<center><h2><font color = "white" ><b>{{$typename}}</b></font></h2></center>
</div>

<!-- when does not have any book in category -->

@if ($booklist==NULL)
     <tr class="primary">
     <td><h4><center><font color = "white">Have no book in this catagory!!!</font></center></center></h4></td>
     </tr>
@else 
@for ($i=0; $i <count($booklist) ; $i++)

<!-- search all book from category that user wants -->
	<div class="col-md-6 col-md-offset-3" style="margin-top:23px;">
		<div class="panel panel-default ">
			<div class="panel-heading">
				  <span class="name"><a href="{{url('/showbook').'/'.$booklist[$i]->getId()}}" ><b><font color = "#A52A2A">{{$booklist[$i]->getName()}}</font></b></a></span><br/>
			</div>
				<li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="../../../book.jpg" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">     
							 <span class="glyphicon glyphicon-pencil text-muted c-info">. Written by  {{$booklist[$i]->getwritername()}} </span>
							<pre> &nbsp &nbsp &nbsp  {{$booklist[$i]->getbookDetail()}}</pre>
                        </div>
                        <div class="clearfix"></div>
                </li>
		</div>
	</div>
 @endfor
@endif		
</div>
 
 
@stop
