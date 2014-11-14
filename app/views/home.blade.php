@extends('nav')

@section('body')
    
	  <a href="http://bootsnipp.com/mouse0270/snippets/4l0k2" class="btn btn-danger hide" id="back-to-bootsnipp">Back to Bootsnipp</a>

<div class="container">
 
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading c-list">
                    <span class="title"><h4>Update</h4></span>
                </div>
                
                
                <ul class="list-group" id="contact-list">

                    @if ($list==NULL)
                    <tr class="primary">
                    <td><h1><center><font color = "RED">No book in web!!!</font></center></center></h1></td>
                    </tr>
                    @else 
                    @for ($i=0; $i <count($list) ; $i++)
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="hp7.jpg" alt="Harry Potter and the Deathly Hallow" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
						
                            <span class="name"><a href="{{url('/showbook').'/'.$list[$i]->getId()}}" onClick=""><b>{{$list[$i]->getName()}}</b></a></span><br/>
							{{$list[$i]->getWritername()}} <span class="glyphicon glyphicon-pencil text-muted c-info"></span>
							<p> &nbsp &nbsp &nbsp   {{$list[$i]->getbookDetail()}} </p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                     @endfor
                    @endif
                    


                </ul>
            </div>
        </div>
		
		<div class="col-xs-12 col-sm-6 ">
			<div class="panel panel-default">

                <div class="panel panel-default">
                <div class="panel-heading c-list">
                    <span class="title"><h4>Top book</h4></span>
                </div>
                
                
                <ul class="list-group" id="contact-list">

                    @if ($top==NULL)
                    <tr class="primary">
                    <td><h1><center><font color = "RED">No have any book rate 4 & 5 !!!</font></center></center></h1></td>
                    </tr>
                    @else 
                    @for ($i=0; $i <count($top) ; $i++)
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="hp7.jpg" alt="Harry Potter and the Deathly Hallow" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
                        
                            <span class="name"><a href="{{url('/showbook').'/'.$top[$i]->getId()}}" onClick=""><b>{{$top[$i]->getName()}}</b></a></span><br/>
                            {{$top[$i]->getWritername()}} <span class="glyphicon glyphicon-pencil text-muted c-info"></span>
                            <p> &nbsp &nbsp &nbsp   {{$top[$i]->getbookDetail()}} </p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                     @endfor
                    @endif
                    


                </ul>
            </div>

                <div class="panel-heading c-list">
                    <span class="title"><h4>Announce</h4></span>
                </div>
                </br>
				</br>
				</br>
				</br>
				</br>
				
				
                
                <ul class="list-group" id="contact-list">
				</ul>
			</div>
			
			
			<div class="panel panel-default">
                <div class="panel-heading c-list">
                    <span class="title"><h4>About us</h4></span>
                </div>
				
                </br>
				</br>
				</br>
				</br>
				</br>
				</br>
                
                <ul class="list-group" id="contact-list">
				</ul>
			</div>
			
		</div>
			


		</div>
	</div>
	
	
@stop
