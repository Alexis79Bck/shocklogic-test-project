@extends('layouts.app')

@section('content')
<div class="d-flex float-end">

    @include('common.messages')

</div>
<div class=" container">
    <div class="d-flex justify-content-center mb-3">

        @livewire('theme.simple.suggest-explorer')

    </div>
    <div class="d-flex justify-content-center mb-3">

            <div class="card border border-dark shadow" >
                <div class="d-flex flex-row  justify-content-center">
                    <div class="col ">
                        <img src="{{ asset('theme/assets/images/' . config('app.logo_image')) }}" class="mx-auto d-block "  alt="Logo" width="224" height="224">
                    </div>
                    <div class="col">
                        <div class="card-header text-light text-center bg-primary h4" >New Account</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}" id="registerForm">
                                @csrf

                                <div class="row mb-1">
                                    <div class="input-group " title="Enter Your First Name And Family Name">
                                        <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                            <span  class="input-group-text bg-primary text-white h-100" id="basic-addon1" ><i class="fas fa-user-edit    "></i></span>
                                        </div>

                                        <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" placeholder="First Name" style="border: 1px solid #2f3e96" required  autofocus>

                                        @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <input id="familyname" type="text" class="form-control @error('familyname') is-invalid @enderror" name="familyname" value="{{ old('familyname') }}" placeholder="Family Name" style="border: 1px solid #2f3e96" required  autofocus>

                                        @error('familyname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="input-group " title="Enter Your Birth Date">
                                        <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                            <span  class="input-group-text bg-primary text-white h-100" id="basic-addon1" ><i class="fas fa-calendar  "></i></span>
                                        </div>

                                        <input id="bday" type="date" class="form-control @error('bday') is-invalid @enderror" name="bday"
                                            value="{{ old('bday') }}"min="{{ date('Y-m-d', strtotime('01 january 1950')) }}" required style="border: 1px solid #2f3e96">

                                        @error('bday')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="input-group " title="Enter Your E-Mail">
                                        <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                            <span  class="input-group-text bg-primary text-white h-100" id="basic-addon1" > <i class="fas fa-envelope    "></i> </span>
                                        </div>

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail" style="border: 1px solid #2f3e96">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="input-group " title="Enter Your Password">
                                        <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                            <span  class="input-group-text bg-primary text-white h-100" id="basic-addon1" > <i class="fas fa-lock    "></i> </span>
                                        </div>

                                        <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" required  placeholder="Password" style="border: 1px solid #2f3e96">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="input-group " title="Confirm Your Password">
                                        <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                            <span  class="input-group-text bg-primary text-white h-100" id="basic-addon1" > <i class="fas fa-lock    "></i> </span>
                                        </div>

                                        <input id="password-confirm" type="text" class="form-control" name="password_confirmation" required  placeholder="Confirm Password" style="border: 1px solid #2f3e96">
                                    </div>
                                </div>

                                <div class="row mb-0 mx-auto">

                                    <button type="submit" class="btn btn-primary">     Sign Up    </button>

                                </div>
                                {{-- <div id="passwordHelp" class="form-text text-danger">The password must contain: <br> Minimun 8 Characters <br> 1 Uppercase letter <br> 1 Lowercase letter <br> 1 Number <br> Special symbol: #, $, %, &, ?, ?, *, -, +</div> --}}
                            </form>
                        </div>
                        <div class="card-footer">

                            <div class="row mb-0 mx-auto">
                                <span class="alert alert-info text-end" >
                                    <strong>Have an account? Click here to
                                        <a href="{{ route('login') }}" class="text-link" >
                                            Log In.
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

{{-- @section('JSCustom')
<script src="{{asset('theme/assets/libs/jquery-validation/jquery.validate.min.js')}}"></script>

<script>
$().ready(function(){
    $.validator.addMethod("passwordPattern", function (value, element) {
        var passwordRegEx = /^([a-zA-Z0-9#$%&*+-])/;
        return this.optional(element) || pattern.test(value);
    }, "The password field contains invalid characters. ");

    $("#registerForm").validate({
        errorClass: "text-danger",
        successClass: "text-success",
        rules: {
            firstname: 'required',
            familyname: 'required',
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8,
                passwordPattern: true
            },
            validator: {
                required: true
            }
        },
        message: {
            firstname: 'This field is required.',
            familyname: 'This field is required.',
            email: {
                required: 'This field is required.',
                email: 'Enter a correct email '
            },
            password: {
                required: 'This field is required.',
                minlength: 'This field must have minimum 8 characters.'
            }
        }



    });





})

</script>
@endsection --}}
