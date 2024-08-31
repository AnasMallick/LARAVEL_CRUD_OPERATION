<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-10">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/employee')}}">Employee Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/display')}}">Employee Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="conatiner">
        <div class="row justify-content-center mt-5">
            @if (session('status'))
            <div class="col-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Assalamualikum </strong> {{session('status')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>               
            @endif
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-18">   
    <table class="table table-primary table-bordered text-center align-middle table-striped table-hover mt-5">
        <thead style="height:60px;" class="align-middle">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">EMPLOYEE NAME</th>
                <th scope="col">EMPLOYEE AGE</th>
                <th scope="col">EMPLOYEE SALARY</th>
                <th scope="col">ACTION</th>
            </tr>
            </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <th>{{$item->emp_name}}</th>
                        <th>{{$item->emp_age}}</th>
                        <th>{{$item->emp_salary}}</th>
                        <th><a href="{{url('update/'.$item->id)}}" class="btn btn-info">UPDATE</a>  <a href="{{url('delete/'.$item->id)}}" class="btn btn-danger">DELETE</a></th>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>