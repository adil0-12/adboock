@extends('layout.master')
@section('main')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create profile</title>
    </head>

    <body>
 
        @if ($errors->any())
            <x-alerte type='danger'>
                <ul>
                    @foreach($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>

            </x-alerte>
        @endif
        <form action="{{ route('create') }}" method="POST">
            @csrf
            <div tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">add profile</h5>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('name')) is-invalid @else is-valid @endif"
                                    name="name" id="" />
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('email')) is-invalid @else is-valid @endif"
                                    name="email" id="" />
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password"
                                    class="form-control @if ($errors->has('pass')) is-invalid @else is-valid @endif"
                                    name="pass" id="" />
                                @error('pass')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="desc" id="" rows="3"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">
                                Create
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>

    </html>
@endsection
