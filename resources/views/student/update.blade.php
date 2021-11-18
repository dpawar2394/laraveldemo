<!DOCTYPE html>    
<html lang="en">
<head>
  <title>student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">Update Student</h2>           
  <form action="{{ url('/students/update') }}" method = "post" enctype = "multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id ="name" name ="name" value ="{{ $student->name }}">
  </div>
  <div class="form-group">
    <label for="pwd">Email:</label>
    <input type="text" class="form-control" id="pwd" name ="email" value ="{{ $student->email }}">
  </div>
  <div class="form-group">
    <label for="pwd">password:</label>
    <input type="password" class="form-control" id="pwd" name ="password" value ="{{ $student->password }}">
  </div>
  <div class="form-group">
    <label for="pwd">City:</label>
    <input type="text" class="form-control" id="city" name ="city" value ="{{ $student->city }}">
  </div>
  <input type="hidden" name="id" value="{{ $student->id }}">
  <button type="submit" class="btn btn-success">Update data</button>
</form>
</div>

</body>
</html>
