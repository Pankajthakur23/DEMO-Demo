<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
{{--<h1 class=" bg-info text-center p-4"> Create view</h1>--}}
<div class="container">
    <div class="row">

       <div class="col-sm-4 mx-auto">

           <h1 class=" bg-info text-center p-4 "> Insert Form</h1>
           <form action="{{route('employee.store')}}" method="post">
@csrf
               <input type="text" name="name" placeholder="enter name" class="form-control">
               @error('name')
               <span style="color:red;">{{$message}} </span>
               @enderror
               <br><br>
               <select name="gender" class="form-control">
                   <option value="">Select Gender</option>
                   <option value="Male">Male</option>
                   <option value="Female">Female</option>

               </select>
               @error('gender')
               <span style="color:red;">{{$message}} </span>
               @enderror
               <br><br>
               <input type="text" name="age" placeholder="enter age" class="form-control">
               @error('age')
               <span style="color:red;">{{$message}} </span>
               @enderror
               <br><br>
               <input type="text" name="designation" placeholder="enter designation" class="form-control">
               @error('designation')
               <span style="color:red;">{{$message}} </span>
               @enderror
               <br><br>
               <input type="submit" value="Insert" class="btn btn-info btn-block">

           </form>

       </div>

    </div>

</div>
</body>
</html>
