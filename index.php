<!DOCTYPE HTML>
<html>

<head>
<script src="js/add_input.js" language="Javascript" type="text/javascript"></script>

</head>

<body>

	<form method="POST" action="view/create_template.view.php">
		<input type="text" name="name" id="name">
     <div id="dynamicInput">
          Entry 1<br><input type="text" name="fields[]" id="fields">
     </div>
     <input type="button" value="Add field" onClick="addInput('dynamicInput');">
     <input type="submit" value="Submit">
	</form>
<body>	
</html>
