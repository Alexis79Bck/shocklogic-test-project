@if (session('message'))
    <div class=" alert alert-success alert-dismissible fade show " role="alert" id="alert-box">
        <i class="fas fa-info-circle"></i> {{ session('message') }}
        <button type="button" class="btn-sm float-end" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></button>
    </div>
@endif

@if (session('message-error'))
    <div class="alert alert-danger alert-dismissible fade show " role="alert" id="alert-box">
        <i class="fas fa-times-circle"></i> {{ session('message-error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session('message-warning'))
    <div class="alert alert-warning alert-dismissible fade show " role="alert" id="alert-box">
        <i class="fas fa-exclamation-circle"></i> {{ session('message-warning') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
