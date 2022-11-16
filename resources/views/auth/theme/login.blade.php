@extends('layouts.app')

@section('content')
<div class="d-flex float-end">

    @include('common.messages')

</div>
<div class="d-flex justify-content-center mb-3">

    @livewire('theme.simple.suggest-explorer')

</div>
<div class="container justify-content-center">

    <div class="col mb-3">

            <div class=" card w-75" >

                <div class="card-body">
                    <div class="container">
                        <div class="col ">
                            <img src="{{ asset('theme/assets/images/' . config('app.logo_image')) }}" class="mx-auto d-block "  alt="Logo" width="224" height="224">
                        </div>

                        <div class="col">
                            <div class="card-header h4 text-center" >Log In</div>


                                <form method="POST" action="{{ route('login') }}" class="form-horizontal mt-3"   id="loginform">
                                    @csrf

                                    <div class="row mb-3">
                                        <div class="input-group mb-3" title="Enter Your E-Mail">
                                            <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                                <span  class="input-group-text" id="basic-addon1" ><i class="fas fa-envelope "></i></span>
                                            </div>
                                            <input id="login_email" type="email" class="form-control @error('login_email') is-invalid @enderror  form-control-lg"  placeholder="E-Mail" name="login_email" value="{{ old('login_email') }}" required autocomplete="login_email" autofocus style="border: 1px solid #2f3e96">

                                            @error('login_email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="input-group mb-3" title="Enter Your Password">
                                            <div class="input-group-prepend" style="border: 1px solid #2f3e96">
                                                <span  class="input-group-text "  id="basic-addon"><i class="fas fa-lock fa-2x"></i></span>
                                            </div>
                                            <input id="login_password" type="password" class="form-control @error('login_password') is-invalid @enderror form-control-lg"    placeholder="Password" name="login_password" required autocomplete="current-password" style="border: 1px solid #2f3e96">

                                            @error('login_password')
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
