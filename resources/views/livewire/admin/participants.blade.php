<div class="vh-100">


    <div class="container pb-3">
        <div class="row">
            @include('common.messages')
        </div>
    </div>
    <div class="container ">
        <div class="row float-end pb-3">
            <a href="" class="btn btn-sm btn-outline-primary rounded-pill" role="button"><i class="fas fa-plus"></i> New</a>
        </div>
    </div>
    <div class="container px-3 table-responsive ">
        <div class="row">
            <table class="table  table-bordered border-primary table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>First Name</th>
                        <th>Family Name</th>
                        <th colspan="3" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($participants as $participant)
                    <tr>
                        <td>{{ $participant->id }}</td>
                        <td>{{ $participant->firstname }}</td>
                        <td>{{ $participant->familyname }}</td>
                        <td><a><i class="far fa-id-card"></i></a></td>
                        <td><a><i class="fas fa-edit"></i></a></td>
                        <td><a><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">No records found</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>


</div>

