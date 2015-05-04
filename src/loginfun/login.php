<?php 
	
		session_id('mySessionID'); //SET id first before calling  session start
		session_start();

?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login </title>
    <link href="../../../../libraries/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="starter-template.css" type="text/css" rel="stylesheet">
	
	<?php

		
	?>
	
	
	
	
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
			<h1>Login Assignment</h1>
		</div>
		

		
		 <?php
			if(!(isset($_SESSION['username'])) || $_SESSION['cont1count'] == 0){
				echo '<div class="jumbotron">
					<h1>Hello, User!!</h1>
					<p>You\'ve not logged in yet! lets log in now.</p>
					<form action="content.php" method="post">
					<div class="input-group">
						<span class="input-group-addon" id="username">User name</span>
						<input type="text" name="username" class="form-control" placeholder="2, 4, 6..." aria-describedby="basic-addon1" required>
					</div><br>
					<button type="submit" class="btn btn-default">Submit</button>
					</form><br><br>
					<p><a class="btn btn-primary btn-lg" href="logout.php" role="button">Logout</a></p>
					</div>';
			}else{
				
				echo '<div class="jumbotron">
					<h1>Hello, ' . $_SESSION['username'] . '</h1>
					<p>You\'ve logged in Successfully!! You\'ve visited this page ' . $_SESSION['cont1count'] . ' many times! </p>
					
					<p><a class="btn btn-primary btn-lg" href="logout.php" role="button">Logout</a></p>
					</div>';
			}
		 
		 ?>

		

	
	
	
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../libraries/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
  </body>
</html>

