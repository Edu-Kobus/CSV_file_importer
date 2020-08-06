<!DOCTYPE html>
<html lang="en">
<head>
  <title>Import CSV</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="cache-control" content="no-cache" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel='stylesheet' type='text/css' href='style.css'>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,500&display=swap" rel="stylesheet">  "
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="jumbotron">
  <h2>Upload Files CSV</h2>
  <form action="importar.php" method="post" enctype="multipart/form-data">
    
    
    
    <div class="checkbox">
      <label><input type="file" name="file"></label>
    </div>
    <span>
    <button type="submit" class="btn btn-default">Enviar</button>
    </span>
  </form>
  </div>
</div>

</body>
</html>