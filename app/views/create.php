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

  
  <div class="container" style="margin-top:40px">
	<div class="row">
      <div class="col-md-12">
        <div class="well well-sm">
          <form class="form-horizontal"  action="" method="post">
          <fieldset>
            <legend class="text-center"><h2><font color = "#1E90FF">Create book</font></h2></legend>
    
            <!-- book name -->
            <div class="form-group">
              <label class="col-md-1 control-label" for="name"><font color = "#1E90FF">Name</font></label>
              <div class="col-md-11">
                <input id="name" name="bookName" type="text" placeholder="name of a book" class="form-control">
              </div>
            </div>

			<!-- Type book -->
            <div class="form-group">
              <label class="col-md-1 control-label" for="name"><font color = "#1E90FF">Type</font></label>
              <div class="col-md-11">
                <select class="selectpicker"  name = "bookType" style="margin-top:9px;">
					<option value="0">Generalities</option>
					<option value="1">Philosophy</option>
					<option value="2">Religion</option>
					<option value="3">Social sciences</option>
					<option value="4">Language</option>
					<option value="5">Science</option>
					<option value="6">Technology</option>
					<option value="7">Arts and recreation</option>
					<option value="8">Literature</option>
					<option value="9">History and geography</option>
				</select>
              </div>
            </div>
		
            <!-- book detail -->
            <div class="form-group">
              <label class="col-md-1 control-label" for="message"><font color = "#1E90FF">Detail</font></label>
              <div class="col-md-11">
                <textarea class="form-control" id="message" name="bookDetail" placeholder="short story of the book" rows="3"></textarea>
              </div>
            </div>
    
            <!-- book context -->
            <div class="form-group">
              <label class="col-md-1 control-label" for="message"><font color = "#1E90FF">Context</font></label>
              <div class="col-md-11">
                <textarea class="form-control" id="message" name="bookContext" placeholder="enter book story here..." rows="15"></textarea>
              </div>
            </div>
			
			 <!-- book context -->
            <div class="form-group">
              <label class="col-md-1 control-label" for="message"><font color = "#1E90FF">Status</font></label>
              <div class="col-md-11">
                <div class="radio">
					<label>
						<input type="radio" name="isPublic" id="optionsRadios1" value="option1" checked>
							Public - Your book can access by any member.
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="isPublic" id="optionsRadios2" value="option2">
							Private - Only member purchase the book.
					</label>
				</div>
              </div>
            </div>
			
			<!-- book price -->
            <div class="form-group">
              <label class="col-md-1 control-label" for="name"><font color = "#1E90FF">Price</font></label>
              <div class="col-md-11">
                <input id="name" name="bookPrice" type="text" placeholder="your price (฿ Baht)" class="form-control">
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    
    <!-- JavaScrip Search Plugin -->
    <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
  </body>
</html>