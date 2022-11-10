@extends('layouts.theme.app')



@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                <img src="{{ asset('theme/assets/images/' . config('app.logo_image')) }}" class="text-center" width="400px" height="400px" alt="Test Project" />
            </div>
        </div>
    </div>
</div>
@endsection
