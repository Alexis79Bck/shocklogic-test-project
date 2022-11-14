@extends('layouts.app')

@section('content')
<div class="d-flex float-end">

    @include('common.messages')

</div>
<div class="container">
    <div class="d-flex justify-content-center mb-3">

        @livewire('theme.simple.suggest-explorer')

    </div>

    <div class="d-flex justify-content-center mb-3">

            <div class="mt-3 card shadow border border-2 border-primary rounded" >

                <div class="d-flex flex-row  justify-content-center">
                    <div class="col ">
                        <img src="{{ asset('theme/assets/images/' . config('app.logo_image')) }}" class="mx-auto d-block "  alt="Logo" width="224" height="224">
                    </div>

                    <div class="col">
                        <div class="card-header h4 text-light text-center bg-primary" >Log In</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}" class="form-horizontal mt-3"   id="loginform">
                                @csrf

                                <div class="row mb-3">
                                    <div class="input-group mb-3" title="Enter Your E-Mail">
                                        <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                            <span  class="input-group-text bg-primary text-white h-100" id="basic-addon1" ><i class="fas fa-envelope    "></i></span>
                                        </div>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror  form-control-lg"  placeholder="E-Mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="border: 1px solid #2f3e96">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="input-group mb-3" title="Enter Your Password">
                                        <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                            <span  class="input-group-text bg-primary text-white h-100"  id="basic-addon"><i class="fas fa-lock "></i></span>
                                        </div>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-control-lg"    placeholder="Contraseña" name="password" required autocomplete="current-password" style="border: 1px solid #2f3e96">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-0 mx-auto">

                                    <button type="submit" class="btn btn-primary">
                                        <span class="h4 fs-4">Let's Go !!</span>
                                    </button>

                                </div>
                            </form>
                        </div>

                        <div class="card-footer">
                            <div class="row mb-0 mx-auto">
                                <span class="alert alert-info text-end" >
                                    <strong>Don't have an account, yet?
                                        <a href="{{ route('register') }}" class="text-link" >
                                            Sign Up here.
                                        </a>
                                    </strong>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div>

</div>
@endsection
