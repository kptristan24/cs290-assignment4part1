<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../favicon.ico">

    <title>Loopback GETPOST</title>
    <link href="../../../libraries/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="starter-template.css" type="text/css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://people.oregonstate.edu/~harit/cs_290/cs290-assignment4part1">Assignment 4</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <!--<li class="active"><a href="#">Link</a></li>
            <li><a href="#about">Link</a></li>
            <li><a href="#contact">Link</a></li>-->
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
	
	

		<div class="starter-template">
			<h1>Loopback Assignment</h1>
		</div>
		
		<form action="loopback.php" method="post">
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Post test</span>
				<input type="text" name="post-test" class="form-control" placeholder="2, 4, 6..." aria-describedby="basic-addon1" required>
		</div><br>
		<button type="submit" class="btn btn-default">Submit</button>
	</form><br><br>
		
	<?php
	
	echo json_encode($_GET);
	echo '<br><br>';
	echo json_encode($_POST);
	
	echo ' <br> <br>';
	
	foreach($_POST as $key => $value){
		echo 'Key: ' . $key . 'Value: ' . $value . '<br />\n';
	}
	?>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../libraries/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
  </body>
</html>

