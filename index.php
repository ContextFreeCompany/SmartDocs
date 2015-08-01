<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SmartScanner - Create Template</title>

    <!-- Bootstrap -->
    <link href="stylesheets/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
  <div class="container">
    <center><h1>Create template</h1></center>
    <div class="col-md-6 col-md-offset-3">
      <form method="post" action="http:view/create_template.view.php">
        <div class="row">
          <div class="form-group">
            <label for="templateName">Name</label>
            <input type="text" class="form-control" id="templateName" name="name" placeholder="Enter the template name">
          </div>
        </div>
        <div class="row">
          <table class="table">
            <thead>
              <tr>
                <th>Field Type</th>
                <th>Field Name</th>
                <th>Required?</th>
                <th><button class="btn btn-primary btn-xs" onclick="addInput();return false;"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add Field</button></th>
              </tr>
            </thead>
            <tbody id="fields">
              <tr id="field0">
                <td>
                  <select class="form-control" name="fields[0][]">
                    <option value="text">Text</option>
                    <option value="integer">Integer</option>
                    <option value="double">Double</option>
                  </select>
                </td>
                <td>
                  <input type="text" class="form-control" id="fieldName" name="fields[0][]" placeholder="Enter the field name">
                </td>
                <td>
                  <input type="checkbox" name="fields[0][]" value="true">
                </td>
                <td><button class="btn btn-danger btn-xs" onclick="removeInput(0);return false;"><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span> Remove</button></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row">
          <button type="submit" class="btn btn-success btn-lg pull-right"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Create Template</button>
        </div>
      </form>
    </div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="javascripts/bootstrap.min.js"></script>
    <script src="javascripts/controlFields.js"></script>
  </body>
</html>