@extends('nav')

@section('body')
    
	  <a href="http://bootsnipp.com/mouse0270/snippets/4l0k2" class="btn btn-danger hide" id="back-to-bootsnipp"></a>

<div class="container">
 
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading c-list">
                    <span class="title"><h4>Update New Book</h4></span>
                </div>
                
                
                <ul class="list-group" id="contact-list">

                    @if ($list==NULL)
                    <tr class="primary">
                    <td><h1><center><font color = "#A52A2A">Not have any book !!!</font></center></h1></td>
                    </tr>
                    @else 
                    @for ($i=0; $i <count($list) ; $i++)
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="../../../book.jpg" alt="Harry Potter and the Deathly Hallow" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
						
                            <span class="name"><a href="{{url('/showbook').'/'.$list[$i]->getId()}}" onClick=""><b><font color = "#A52A2A">{{$list[$i]->getName()}}</font></b></a></span><br/>
							{{$list[$i]->getWritername()}} <span class="glyphicon glyphicon-pencil text-muted c-info"></span>
							<pre> &nbsp &nbsp &nbsp   {{$list[$i]->getbookDetail()}} </pre>
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
                <div class="panel-heading c-list">
                    <span class="title"><h4>Top Book</h4></span>
                </div>
                
                
                <ul class="list-group" id="contact-list">

                    @if ($top==NULL)
                    <tr class="primary">
                    <td><h2><center><font color = "#A52A2A">Not have any book rate 4 & 5 !!!</font></center></h2></td>
                    </tr>
                    @else 
                    @for ($i=0; $i <count($top) ; $i++)
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="../../../book.jpg" alt="Harry Potter and the Deathly Hallow" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
                        
                            <span class="name"><a href="{{url('/showbook').'/'.$top[$i]->getId()}}" onClick=""><b><font color = "#A52A2A">{{$top[$i]->getName()}}</font></b></a></span><br/>
                            {{$top[$i]->getWritername()}} <span class="glyphicon glyphicon-pencil text-muted c-info"></span>
                            <pre> &nbsp &nbsp &nbsp   {{$top[$i]->getbookDetail()}} </pre>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                     @endfor
                    @endif
                    
					
					<li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="city.jpg" alt="The mortal instruments city of bones" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
						
                            <span class="name"><a href="#" onClick=""><b>The mortal instruments : City of bones</b></a></span><br/>
							Namsom <span class="glyphicon glyphicon-pencil text-muted c-info"></span>
							<p> &nbsp &nbsp &nbsp  Clary Fray, discovers she is the descendant of a line of Shadowhunters, a secret cadre of young half-angel warriors locked in an ancient battle to protect our world from demons. After the disappearance of her mother, Clary must join forces with a group of Shadowhunters, who introduce her to a dangerous alternate New York called Downworld, filled with demons, warlocks, vampires, werewolves and other deadly creatures.</p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
					
					
					
					
					


                </ul>
            </div>
			<div class="panel panel-default">
                <div class="panel-heading c-list">
                    <span class="title"><h4>Announce</h4></span>
                </div>
                </br>
				<h5><font color = "#A52A2A"> &nbsp &nbsp &nbsp  Top book is shown only books rate 4 and 5 ever!.</font></h5>
				</br>
				
				
				
                
                <ul class="list-group" id="contact-list">
				</ul>
			</div>
			
			
			<div class="panel panel-default">
                <div class="panel-heading c-list">
                    <span class="title"><h4>About us</h4></span>
                </div>
				</br> 
				<h5><font color = "#A52A2A">  &nbsp &nbsp &nbsp  This website is like a library room, find your favourite book and enjoy it !!!</font></h5>
				</br>
                
                <ul class="list-group" id="contact-list">
				</ul>
			</div>
			
		</div>
			


		</div>
	</div>
	
	
@stop
