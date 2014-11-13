@extends('nav')

@section('body')
    

  <a href="http://bootsnipp.com/mouse0270/snippets/4l0k2" class="btn btn-danger hide" id="back-to-bootsnipp">Back to Bootsnipp</a>

<div class="container">
     <div class="row col-sm-8" >
       	<div class="panel panel-default">
            <div class="panel-heading c-list">
                    <span class="title"><center><h4>The finance of<font color = "blue" > {{$name}}</font></h4></center></span>
            </div>
				</br>
				<p>&nbsp &nbsp &nbsp &nbsp {{$finance}}</p>
				</br>


		</div>
		
		</br>	
		<p><h4><font color="RED">Note: Transfer money following by writer's financial detials.</br> 
		&nbsp &nbsp &nbsp &nbsp &nbsp Do not forget to let the writer know if you already finish the process.</br>
		&nbsp &nbsp &nbsp &nbsp &nbsp Please wait until the writer accepts your request.</font></h4></p>
	</div>
	<div class="row col-sm-4">
		<center><img src = "../../../buy.jpg" ></center>
	
	</div>
</div>
 
 
 
 
 
@stop
