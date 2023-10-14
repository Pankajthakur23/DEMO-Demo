<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
           <h1 class="Jumbotron bg-dark text-white text-center"> CRUD Application in Laravel</h1>

        </div>

    </div>
<div class="row">
   <div class="col-sm-12">
       <a href="{{route('employee.create')}}"class="btn btn-outline-info">Add New Employee</a>
       <br><br>

       @include('Message')
       <table class="table bg-dark text-white text-center">
             <tr>
                 <th>ID</th>
                 <th>Name</th>
                 <th>Gender</th>
                 <th>Age</th>
                 <th>Designation</th>
                 <th colspan="2">Operation</th>

             </tr>
          @foreach($data as $data)
              <tr>
                  <td>{{$data['Id']}}</td>
                  <td>{{$data['name']}}</td>
                  <td>{{$data['gender']}}</td>
                  <td>{{$data['age']}}</td>
                  <td>{{$data['designation']}}</td>
                  <td>
                      <a href="employee/{{$data['Id']}}/edit"class="btn btn-info">Edit</a>

                  </td>
                  <td>
                      <form action="{{route('employee.destroy',['employee'=>$data['Id']])}}" method="post" onsubmit="return confirmDelete()">
                          @method('delete')
                          @csrf

                          <input type="submit" value="Delete" class="btn btn-danger">

                      </form>

                  </td>

              </tr>
           @endforeach
       </table>

   </div>


</div>


</div>
<script>
function confirmDelete()
{
   return confirm("Are you sure to delete data ??");

}


</script>

</body>
</html>
