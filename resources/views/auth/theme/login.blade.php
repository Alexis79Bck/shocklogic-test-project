@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.messages')

</div>
<div class="d-flex justify-content-center mb-3">

    @livewire('theme.simple.suggest-explorer')

</div>
<div class="container justify-content-center ">


            <div class=" card " >
                <div class="card-body vh-100">
                    <div class="container">
                    <div class="row">
                        <div class="col p-3 mb-3" style="background: url({{ asset('theme/assets/images/wallpaper-abstract-black.jpg') }}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                            <div class="d-flex flex-column">
                                <span class="text-center bg-light">
                                    <img src="{{ asset('theme/assets/images/' . config('app.logo_text')) }}" class="img-fluid"  alt="Logo" width="224" height="132">
                                </span>
                                <hr class="dropdown-divider">
                                <blockquote class="blockquote text-light font-monospace">Lorem ipsum dolor sit amet consectetur adipisicing elit. </blockquote>
                                <hr class="dropdown-divider fixed-bottom">
                                <span class="fixed-bottom"></span>
                            </div>

                        </div>

                        <div class="col">
                            <div class="card-header text-center" style="background-color: " ><span class="fw-bold fs-3 display-6 ">Create an Account</span></div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('newAccount') }}" id="registerForm">
                                    @csrf

                                    <div class="row mb-3">
                                        <div class="input-group " title="Enter Your First Name ">
                                            <div class="input-group-prepend" style="border-bottom: 1px solid #2f3e96">
                                                <span  class="input-group-text text-black "  ><i class="fas fa-user-edit fa-lg "></i></span>
                                            </div>

                                            <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" placeholder="First Name" style="border-bottom: 1px solid #2f3e96" required  autofocus>

                                            @error('firstname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="input-group " title="Enter YourFamily Name">
                                            <div class="input-group-prepend" style="border-bottom: 1px solid #2f3e96">
                                                <span  class="input-group-text text-black "  ><i class="fas fa-user-edit  fa-lg  "></i></span>
                                            </div>
                                            <input id="familyname" type="text" class="form-control @error('familyname') is-invalid @enderror" name="familyname" value="{{ old('familyname') }}" placeholder="Family Name" style="border-bottom: 1px solid #2f3e96" required  autofocus>

                                            @error('familyname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="input-group " title="Enter Your Birth Date">
                                            <div class="input-group-prepend" style="border-bottom: 1px solid #2f3e96">
                                                <span  class="input-group-text  text-black "  ><i class="fas fa-calendar fa-lg "></i></span>
                                            </div>

                                            <input id="bday" type="date" class="form-control @error('bday') is-invalid @enderror" name="bday"
                                                value="{{ old('bday') }}"min="{{ date('Y-m-d', strtotime('01 january 1950')) }}" required style="border-bottom: 1px solid #2f3e96">

                                            @error('bday')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="input-group " title="Enter Your E-Mail">
                                            <div class="input-group-prepend" style="border-bottom: 1px solid #2f3e96">
                                                <span  class="input-group-text text-black " id="basic-addon1" > <i class="fas fa-envelope  fa-lg  "></i> </span>
                                            </div>

                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail" style="border-bottom: 1px solid #2f3e96">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="input-group " title="Enter Your Password">
                                            <div class="input-group-prepend" style="border-bottom: 1px solid #2f3e96">
                                                <span  class="input-group-text text-black"  > <i class="fas fa-lock  fa-lg  "></i> </span>
                                            </div>

                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  placeholder="Password" style="border-bottom: 1px solid #2f3e96">
                                            <div class="input-group-prepend" style="border-bottom: 1px solid #2f3e96">
                                                <span  class="input-group-text  text-black" id="eye-button-password"><i class="fas fa-eye  " id="password-icon-eye"></i> </span>
                                            </div>
                                            <div  class="form-text text-dark"> The password is required and must contain at least:
                                                <span class="fw-bold text-{{ session('8CharLenghtStatus') }}">8 character lenght</span>,
                                                <span class="fw-bold text-{{ session('digitStatus') }}">1 digit</span>,
                                                <span class="fw-bold text-{{ session('lowercaseCharStatus') }}">1 lowercase char</span>,
                                                <span class="fw-bold text-{{ session('uppercaseCharStatus') }}">1 uppercase char</span> and
                                                <span class="fw-bold text-{{ session('specialCharStatus') }}">1 special char</span>.
                                            </div>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="input-group " title="Confirm Your Password">
                                            <div class="input-group-prepend" style="border-bottom: 1px solid #2f3e96">
                                                <span  class="input-group-text  text-black" > <i class="fas fa-lock  fa-lg  "></i> </span>
                                            </div>

                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required  placeholder="Confirm Password" style="border-bottom: 1px solid #2f3e96">
                                            <div class="input-group-prepend" style="border-bottom: 1px solid #2f3e96">
                                                <span  class="input-group-text  text-black" id="eye-button-confimation" ><i class="fas fa-eye  " id="password-confirmation-icon-eye"></i> </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-0 mx-auto">

                                        <button type="submit" class="btn btn-outline-secondary">     Sign Up    </button>

                                    </div>

                                </form>
                            </div>

                        </div>

                        <div class="col">
                            <div class="card-header text-center" style="background-color: " ><span class="fw-bold fs-3 display-6 ">Log In</span></div>


                                <form method="POST" action="{{ route('validate-login') }}" class="form-horizontal mt-3"   id="loginform">
                                    @csrf

                                    <div class="row mb-3">
                                        <div class="input-group" title="Enter Your E-Mail">
                                            <div class="input-group-prepend" style="border-bottom: 1px solid #2f3e96">
                                                <span  class="input-group-text text-black"  ><i class="fas fa-envelope fa-lg"></i></span>
                                            </div>
                                            <input id="loginEmail" type="email" class="form-control @error('loginEmail') is-invalid @enderror  form-control-lg"  placeholder="E-Mail" name="loginEmail" value="{{ old('loginEmail') }}" required autocomplete="login-email" autofocus style="border-bottom: 1px solid #2f3e96">

                                            @error('login_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="input-group " title="Enter Your Password">
                                            <div class="input-group-prepend" style="border-bottom: 1px solid #2f3e96">
                                                <span  class="input-group-text text-black"  ><i class="fas fa-lock fa-lg"></i></span>
                                            </div>
                                            <input id="login-password" type="password" class="form-control @error('loginPassword') is-invalid @enderror form-control-lg"    placeholder="Password" name="loginPassword" required  style="border-bottom: 1px solid #2f3e96">
                                            <div class="input-group-prepend" style="border-bottom: 1px solid #2f3e96">
                                                <span  class="input-group-text  text-black" id="eye-button-login" ><i class="fas fa-eye  " id="password-login-icon-eye"></i> </span>
                                            </div>
                                            @error('login-password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="row mb-0 mx-auto">

                                        <button type="submit" class="btn btn-outline-secondary">
                                            <span class="h4 fs-4">Let's Go !!</span>
                                        </button>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    </div>


                </div>

            </div>



</div>
@endsection

@section('JSCustom')
<script>
    $(document).ready(function(){

        $('#eye-button-confimation').on('click',function(e){
            var eyeElement = $('#password-confirmation-icon-eye')
            e.preventDefault();
            if (eyeElement.hasClass('fa-eye')) {
                eyeElement.addClass('fa-eye-slash')
                eyeElement.removeClass('fa-eye');
                $('#password-confirm').attr('type', 'text');
            }else{
                eyeElement.addClass('fa-eye')
                eyeElement.removeClass('fa-eye-slash');
                $('#password-confirm').attr('type', 'password');

            }
        })

        $('#eye-button-password').on('click',function(e){
            var eyeElement = $('#password-icon-eye')
            e.preventDefault();
            if (eyeElement.hasClass('fa-eye')) {
                eyeElement.addClass('fa-eye-slash')
                eyeElement.removeClass('fa-eye');
                $('#password').attr('type', 'text');
            }else{
                eyeElement.addClass('fa-eye')
                eyeElement.removeClass('fa-eye-slash');
                $('#password').attr('type', 'password');

            }
        })

        $('#eye-button-login').on('click',function(e){
            var eyeElement = $('#password-login-icon-eye')
            e.preventDefault();
            if (eyeElement.hasClass('fa-eye')) {
                eyeElement.addClass('fa-eye-slash')
                eyeElement.removeClass('fa-eye');
                $('#login-password').attr('type', 'text');
            }else{
                eyeElement.addClass('fa-eye')
                eyeElement.removeClass('fa-eye-slash');
                $('#login-password').attr('type', 'password');

            }
        })


    });

</script>


@endsection
