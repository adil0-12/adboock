@extends('layout.master')
@section('main')
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profile</title>
</head>
<body>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<div class="bg-light">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card profile-card shadow  mt-4">
            <div class="card-body text-center">
                <img src="https://picsum.photos/id/77/450/300" alt="User Profile" class="rounded-circle profile-img me-2">
                <h3 class="card-title mb-0">{{$profile->name}}</h3>
                <p class="text-muted">Web Developer</p>
                <p class="card-text">{{$profile->description}}</p>

                <div class="d-flex justify-content-center mb-3">
                    <a href="#" class="btn btn-outline-primary me-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="btn btn-outline-primary me-2"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="btn btn-outline-primary"><i class="bi bi-github"></i></a>
                </div>

                <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item bg-transparent">
                        <i class="bi bi-envelope-fill me-2"></i>{{$profile->email}}
                    </li>
                    
                </ul>

                <div class="d-flex justify-content-between text-center mt-4">
                    
                    
                   
                </div>

                
                <a href="{{route('profiles.index')}}"class="btn btn-primary w-100 mt-4">Go Back</a>
            </div>
        </div>
    </div>
</div>
</body>

@endsection
</html>