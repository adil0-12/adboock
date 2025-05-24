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
                    @foreach ($errors->all() as $item)
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
                                    name="name" value="{{old('name')}}" id="" />
                            </div>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text"
                                    class="form-control @if ($errors->has('email')) is-invalid @else is-valid @endif"
                                    name="email" value="{{old('email')}}" id="" />
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                            {{-- Password --}}
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password"
                                        class="form-control @if ($errors->has('pass')) is-invalid @else is-valid @endif"
                                        name="pass" id="passwordInput">
                                    <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                                        <i class="bi bi-eye" id="eyeIcon"></i>
                                    </button>
                                </div>
                                @error('pass')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Confirm Password --}}
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <div class="input-group">
                                    <input type="password"
                                        class="form-control @if ($errors->has('pass')) is-invalid @else is-valid @endif"
                                        name="pass_confirmation"  id="confirmPasswordInput">
                                    <button type="button" class="btn btn-outline-secondary" id="toggleConfirmPassword">
                                        <i class="bi bi-eye" id="confirmEyeIcon"></i>
                                    </button>
                                </div>
                                @error('pass')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="desc"  id="" rows="3">{{ old('desc')}}</textarea>
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
    <x-show-password/>

    </html>
@endsection
