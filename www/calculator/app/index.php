<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"></script>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container" style="margin-top: 50px">

			<?php require_once "./calcController.php";?>

				<h1><p><center>Calculator</center></p></h1>

		    <form class="text-center" method="post">
		        <input placeholder="Enter number 1" name="number1" type="text" class="form-control inputField" />
		        <select name="operation">
		        	<option value="plus">Plus</option>
		            <option value="minus">Minus</option>
		            <option value="times">Multiply</option>
		            <option value="divided by">Divided By</option>
		        </select>
		        <input placeholder="Enter number 2" name="number2" type="text" class="form-control inputField" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
		</div>
	</body>
</html>
