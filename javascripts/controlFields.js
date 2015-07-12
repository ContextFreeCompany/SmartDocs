counter = 1

function addInput() {
	newField = document.createElement('tr');
	//newField.setAttribute(id,"field"+counter);
	newField.id = "field"+counter;
	newField.innerHTML = '<td><select class="form-control" name="fields['+counter+'][]"><option value="text">Text</option><option value="integer">Integer</option><option value="double">Double</option></select></td><td><input type="text" class="form-control" id="fieldName" name="fields['+counter+'][]" placeholder="Enter the field name"></td><td><input type="checkbox" name="fields['+counter+'][]" value="true"></td><td><button class="btn btn-danger btn-xs" onclick="removeInput('+counter+');return false;"><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> Remove</button></td>';
	document.getElementById('fields').appendChild(newField);
	counter++;
}

function removeInput(id) {
	document.getElementById('field'+id).remove();
}