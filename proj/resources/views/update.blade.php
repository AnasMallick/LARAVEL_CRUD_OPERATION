<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Page</title>
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
                    <strong>Assalamualikum</strong>{{session('status')}}
                    <strong>Assalamualikum</strong>{{session('warning')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>               
            @endif
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="row text-center text-primary">
            <h1>Update Form</h1>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-6 border rounded-3 shadow">  
                <form action="{{url('/update')}}" method="post">
                    @csrf
                    <div class="mb-3 mt-3">
                        <input type="hidden" name="id" class="form-control" value="{{$data[0]->id}}">
                    </div>
                    <div class="mb-3 mt-3">
                    <input type="text" name="emp_name" value="{{$data[0]->emp_name}}" class="form-control mt-3" id=""><br>
                    <input type="text" name="emp_age" value="{{$data[0]->emp_age}}" class="form-control" id=""><br>
                    <input type="text" name="emp_salary" value="{{$data[0]->emp_salary}}" class="form-control" id=""><br>
                    <center><input type="submit" value="SUBMIT" class="btn btn-outline-success mt-10 w-50 center" ></center>
                </div>
                </form>

        </div>
    </div>
    </div>  
</body>
</html>