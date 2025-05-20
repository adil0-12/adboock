@extends('layout.master')
@section('main')


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>profiles</title>
    </head>

    <body>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">

            @foreach ($profiles as $profile)
                <x-profile-card :profile="$profile" />
            @endforeach
        </div>
        {{ $profiles->links() }}

    </body>
@endsection

</html>
