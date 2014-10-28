<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootflat/bootflat/css/bootflat.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  
  
  
  
  <div  style = "background-color:black;">
  
	
    <div class="row">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" >
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" >
                    <div class="item active">
                        <img src="tree.jpg" alt="First slide">
                        <div class="carousel-caption">
                            <h3>
                                </h3>
                            <p>หนังสือน่าอ่าน</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="tree2.jpg" alt="Second slide">
                        <div class="carousel-caption">
                            <h3>
                                Second slide</h3>
                            <p>หนังสือมาใหม่</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="tree3.jpg" alt="Third slide">
                        <div class="carousel-caption">
                            <h3>
                                Third slide</h3>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
            </div>
            
        </div>
    </div>
</div>
<div id="push">
</div>

  
  
  
  
  
  
  
  
  	<div class = "row">
	<nav class="navbar navbar-inverse navbar-static-top container-fluid" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="home"><img class="img-responsive" src="brand.png"></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   
   <ul class="nav navbar-nav">
        <li class="nonactive"><a href="home"><span class="glyphicon glyphicon-home"></span> &nbsp Home </a></li>
        <li class="dropdown thumb-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-align-justify"></span> &nbsp Categories <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li role="presentation" class="dropdown-header"></li>
            <li>
                <a href="c1">
                    Generalities                                
                    <div class="thumbnail">
                        <img class="img-responsive" src="1.jpg">
                    </div>
                </a>
            </li>
            <li>
                <a href="c2">
                   Philosophy                                
                    <div class="thumbnail">
                        <img class="img-responsive" src="2.jpg">
                    </div>
                </a>
            </li>
            <li>
                <a href="c3">
                    Religion                             
                    <div class="thumbnail">
                        <img class="img-responsive" src="3.jpg">
                    </div>
                </a>
            </li>
			<li>
                <a href="c4">
                   Social sciences                               
                    <div class="thumbnail">
                        <img class="img-responsive" src="4.jpg">
                    </div>
                </a>
            </li>
            <li>
                <a href="c5">
                   Language                                
                    <div class="thumbnail">
                        <img class="img-responsive" src="5.jpg">
                    </div>
                </a>
            </li>
            <li>
                <a href="c6">
                    Science                              
                    <div class="thumbnail">
                        <img class="img-responsive" src="6.jpg">
                    </div>
                </a>
            </li>
		   <li>
                <a href="c7">
                    Technology                               
                    <div class="thumbnail">
                        <img class="img-responsive" src="7.jpg">
                    </div>
                </a>
            </li>
            <li>
                <a href="c8">
                   Arts and recreation                                
                    <div class="thumbnail">
                        <img class="img-responsive" src="8.jpg">
                    </div>
                </a>
            </li>
            <li>
                <a href="c9">
                    Literature                              
                    <div class="thumbnail">
                        <img class="img-responsive" src="9.jpg">
                    </div>
                </a>
            </li>
			<li>
                <a href="c10">
                   History and geography                               
                    <div class="thumbnail">
                        <img class="img-responsive" src="10.jpg">
                    </div>
                </a>
            </li>
            
          </ul>
        </li>
		<li class="nonactive"><a href="howto"><span class="glyphicon glyphicon-shopping-cart"></span> &nbsp How to buy </a></li>
      </ul>
   
		<div class="col-sm-2 col-md-2">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>	
		</div>
		
	<div class="bs-docs-example col-sm-2 col-md-2">
            <select type="text" style="margin-top:9px;" class="form-control multiselect multiselect-icon" role="multiselect">          
				<option value="0" data-icon="glyphicon-picture" selected="selected">By name</option>          
				<option value="1" data-icon="glyphicon-link">By writer</option> 
            </select> 
		</div>
	
   
    
    <ul class="nav navbar-nav navbar-right">
		
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Namsom Juice &nbsp <span class= "glyphicon glyphicon-user pull-right"></span></a>
			<ul class="dropdown-menu">
				<li><a href="setting">Account Setting<span class="glyphicon glyphicon-cog pull-right"></span></a></li>
				<li class="divider"></li>
				<li><a href="create">Create Book  <span class="glyphicon glyphicon-plus pull-right"></span></a></li>
				<li class="divider"></li>
                <li><a href="manage">Manage Book <span class="glyphicon glyphicon-pencil pull-right"></span></a></li>
                <li class="divider"></li>
				<li><a href="#">Book Request &nbsp <span class="badge pull-right"> 2 </span></a></li>
				<li class="divider"></li>
				<li><a href="firstpage">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
			</ul>
		</li>
			
    </ul>
	  
  </div><!-- /.navbar-collapse -->
</nav>
</div>
  
@yield('body')
    
        
    <!-- JavaScrip Search Plugin -->
    <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
    

  
  
  
	
		

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
  </body>
</html>