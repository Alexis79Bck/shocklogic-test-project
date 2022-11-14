<!-- Acme Font -->
<link href="{{ asset('theme/css/fonts.css') }}" rel="stylesheet"  />

<!-- Custom CSS -->
<link href="{{ asset('theme/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" />
<link href="{{ asset('theme/assets/libs/datatables/1.13/css/jquery.dataTables.css')}}" rel="stylesheet"  >
<link href="{{ asset('theme/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet"  >
<link href="{{ asset('theme/css/icons/font-awesome/css/all.css')}}" rel="stylesheet" />
<link href="{{ asset('theme/css/normalize.min.css')}}" rel="stylesheet" />
<link href="{{ asset('theme/css/style.min.css')}}" rel="stylesheet" />

<style>
  body {
    background-image: url({{ asset('theme/assets/images/orange-blur-abstract-background.jpg') }});
    background-size: cover;

  }
.colored-toast.swal2-icon-success {
  background-color: #66db22 !important;
}

.colored-toast.swal2-icon-error {
  background-color: #bb4545 !important;
}

.colored-toast.swal2-icon-warning {
  background-color: #f8da86 !important;
  color:black;
}

.colored-toast.swal2-icon-info {
  background-color: #5fbef5 !important;
}

.colored-toast.swal2-icon-question {
  background-color: #78878d !important;
}

.colored-toast .swal2-title {
  color: white;
}

.colored-toast .swal2-close {
  color: white;
}

.colored-toast .swal2-html-container {
  color: rgba(231, 231, 231, 0.918);
}

</style>

@livewireStyles
