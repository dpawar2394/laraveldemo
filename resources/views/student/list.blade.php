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
  <h2 class="text-center">STUDENT LIST</h2> 
  <p><a href="{{ url('/students/add') }}" class ="btn btn-primary">Add student</a></p>           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>cource_id</th>

        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->cource_id }}</td>
                
                
                <td>

                  <a href="{{ url('/students/edit/'.$student->id) }}" 
                  class = "btn btn-warning btn-sm">Edit</a>
                  <a href="/students/delete/{{$student->id}}" class = "btn btn-danger">delete</a>
                </td>
                
            </tr>
       @endforeach

    </tbody>
  </table>
  
  {{ $students->links() }} 

</div>

</body>
</html>
