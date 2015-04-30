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

    <title>Multiplication Table</title>
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
			<h1>Multtable Assignment</h1>
		</div>
		
		<?php
			$tablecheck = 0;
			$fail = 0;
			//Checks if the args have been supplied correctly
			if(!($_GET["max-multiplicand"])){
				echo 'You haven\'t given me any args! Please use the form below.<br><br>';
			}
			else{
				if(!(is_numeric($_GET["max-multiplicand"]))){
					echo 'Max Multiplicand is not an integer. Please try again.<br><br>';
					$fail = 1;
				}
				if(!(is_numeric($_GET["min-multiplicand"]))){
					echo 'Max Multiplicand is not an integer. Please try again.<br><br>';
					$fail = 1;
				}
				if(!(is_numeric($_GET["max-multiplier"]))){
					echo 'Max Multiplier is not an integer. Please try again.<br><br>';
					$fail = 1;
				}
				if(!(is_numeric($_GET["min-multiplier"]))){
					echo 'Min Multiplier is not an integer. Please try again.<br><br>';
					$fail = 1;
				}
				if(($_GET["max-multiplicand"]) <= ($_GET["min-multiplicand"])){
					$fail = 1;
					echo 'Min was larger that max multiplicand! Please try again.<br><br>';
				}
				if(($_GET["max-multiplier"]) <= ($_GET["min-multiplier"])){
					$fail = 1;
					echo 'Min was larger that max multiplier! Please try again.<br><br>';
				}
				if($fail != 1){
					echo 'You\'ve supplied args in the URL! Submit the form below to change them.<br><br>';
					$tablecheck = 1;
				}
			}
			//echo 'Returns: ' . is_numeric($_GET["max-multiplicand"]);
		?>
		
		<form action="multtable.php" method="get">
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Max Multiplicand</span>
				<input type="text" name="max-multiplicand" class="form-control" placeholder="2, 4, 6..." aria-describedby="basic-addon1" required>
		</div><br>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Min Multiplicand</span>
				<input type="text" name="min-multiplicand" class="form-control" placeholder="2, 4, 6..." aria-describedby="basic-addon1" required>
		</div><br>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Max Multiplier</span>
				<input type="text" name="max-multiplier" class="form-control" placeholder="2, 4, 6..." aria-describedby="basic-addon1" required>
		</div><br>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">Min Multiplier</span>
				<input type="text" name="min-multiplier" class="form-control" placeholder="2, 4, 6..." aria-describedby="basic-addon1" required>
		</div><br>
		<button type="submit" class="btn btn-default">Submit</button>
		</form><br><br>
		
		<?php
		if($tablecheck == 1){
			$rows = ($_GET["max-multiplicand"] - $_GET["min-multiplicand"]) + 2;
			$columns = ($_GET["max-multiplier"] - $_GET["min-multiplier"]) + 2;
			
			$width = $_GET["max-multiplicand"];
			$height = $_GET["max-multiplier"];

			$table = '<table style="width:100%" class="table table-bordered">';
			for($r = 1; $r <= $height; $r++){
				$table .= '<tr>';
				for($c = 1; $c <= $width; $c++){
					if($c == 1 && $r == 1){
						$table .= "<td>  </td>";
						
					}else{
						$table .= "<td>" . ($r * $c) . "</td>";
					}
				}
				$table .= '</tr>';
			}
			$table .= '</table>';
			echo $table;
		}
			
			
		
		?>
		
		

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../libraries/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
  </body>
</html>

