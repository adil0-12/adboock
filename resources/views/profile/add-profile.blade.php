@extends('layout.master')

    <!DOCTYPE html>
    <html lang="en">
@section('main')
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
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-4">Create an account</h2>
                                <form action="{{ route('create') }}" method="POST">
                                    @csrf
                                    <div data-mdb-input-init class="form-outline mb-3 ">
                                        <label class="form-label" for="form3Example1cg">Your Full Name</label>
                                        <input type="text" id="form3Example1cg" name="name" value="{{old('name')}}" class="form-control form-control-lg" />
                                        
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-3 ">
                                        <label class="form-label" for="form3Example3cg">Your Email</label>

                                        <input type="email" name="email" value="{{old('email')}}" id="form3Example3cg" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="form3Example4cg" class="form-label text-muted mb-2">Password</label>
                                        <div class="input-group password-input-group">
                                            <input type="password" name="pass" id="form3Example4cg" 
                                                   class="form-control form-control-lg border-end-0" 
                                                   
                                                   style="border-radius: 0.5rem 0 0 0.5rem !important;">
                                            <span class="input-group-text bg-white border-start-0 toggle-password" 
                                                  style="border-radius: 0 0.5rem 0.5rem 0 !important; cursor: pointer;"
                                                  data-target="#form3Example4cg">
                                                <i class="bi bi-eye-slash password-toggle-icon"></i>
                                            </span>
                                        </div>
                                       
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-3 ">
                                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>

                                        <input type="password" name="pass_confirmation" id="form3Example4cdg" class="form-control form-control-lg" />
                                    </div>
                                    <div data-mdb-input-init class="form-outline mb-3 ">
                                        <label class="form-label" for="form3Example4cdg">About Me</label>

                                    <textarea  class="form-control" name="desc" >{{old('desc')}}</textarea>
                                    </div

                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                                    service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="{{ route('Login')}}"
                                            class="fw-bold text-body"><u>Login here</u></a></p>
                                </form>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
    <x-show-password />
@endsection
    </html>

