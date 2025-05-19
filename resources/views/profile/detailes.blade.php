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
    
        
        
      <div class="card mb-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$profile->name}}</h5>
          <p class="card-text">{{$profile->email}}</p>
          <p class="card-text">{{$profile->description}}</p>
          <a href="{{route('profiles.index')}}" class="btn btn-primary">Go Back</a>
        </div>
      </div>
      
    
</body>
@endsection
</html>