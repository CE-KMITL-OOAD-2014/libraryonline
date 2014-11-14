@extends('nav')

@section('body')


@if ($booklist==NULL)
     <tr class="primary">
     <td><h1><center><font color = "RED">The book does not found!!!</font></center></center></h1></td>
     </tr>
@else 
@for ($i=0; $i <count($booklist) ; $i++)
<!--second story-->
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default ">
			<div class="panel-heading">
				  <span class="name"><a href="{{url('/showbook').'/'.$booklist[$i]->getId()}}" ><b>{{$booklist[$i]->getName()}}</b></a></span><br/>
			</div>
			<li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="hp7.jpg" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">     
							 <span class="glyphicon glyphicon-pencil text-muted c-info">. Written by ID {{$booklist[$i]->getWritername()}} </span>
							<p> &nbsp &nbsp &nbsp  {{$booklist[$i]->getbookDetail()}}</p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
		</div>
	</div>
</div>
 @endfor
@endif
								
 
 
@stop
