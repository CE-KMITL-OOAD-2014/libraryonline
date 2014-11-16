@extends('nav')

@section('body')

<a href="http://bootsnipp.com/mouse0270/snippets/4l0k2" class="btn btn-danger hide" id="back-to-bootsnipp"></a>

<div class="container">

    <div class="row">
       
       <!--Update list -->
       <div class="col-xs-12 col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading c-list">
                <span class="title"><h4>Update New Book</h4></span>
            </div>                          
            <ul class="list-group" id="contact-list">

                @if ($list==NULL)
                <tr class="primary">
                    <td><h2><center><font color = "#A52A2A">Have no any book !!!</font></center></h2></td>
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
    
    <!-- Top book list -->
    <div class="col-xs-12 col-sm-6 ">
        <div class="panel panel-default">
            <div class="panel-heading c-list">
                <span class="title"><h4>Top Book</h4></span>
            </div>
            <ul class="list-group" id="contact-list">

                @if ($top==NULL)
                <tr class="primary">
                    <td><h2><center><font color = "#A52A2A">Have no any book rate 4 & 5 !!!</font></center></h2></td>
                </tr>
                @else 
                @for ($i=0; $i <count($top) ; $i++)
                
                <li class="list-group-item">
                    <div class="col-xs-12 col-sm-3">
                        <img src="./../../book.jpg" class="img-responsive img-circle" />
                    </div>
                    <div class="col-xs-12 col-sm-9">
                      
                        <span class="name"><a href="{{url('/showbook').'/'.$top[$i]->getId()}}" ><font color = "#A52A2A">{{$top[$i]->getName()}}</font></b></a></span><br/>
                        {{$top[$i]->getWritername()}} <span class="glyphicon glyphicon-pencil text-muted c-info"></span>
                        <pre> &nbsp &nbsp &nbsp  {{$top[$i]->getbookDetail()}}</pre>
                        
                    </div>
                    <div class="clearfix"></div>
                </li>
                
                
                @endfor
                @endif
                
                <!-- Announce form-->
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

<!-- About us form-->
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
