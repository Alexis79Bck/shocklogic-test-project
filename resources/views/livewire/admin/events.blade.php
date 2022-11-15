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
        <div class="container table-responsive px-3">
            <div class="row">
                <table class="table table-bordered border-primary table-striped">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th>Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Location</th>
                            <th colspan="2" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->name }}</td>
                            <td>{{ $event->startdate }}</td>
                            <td>{{ $event->enddate }}</td>
                            <td>{{ $event->location }}</td>
                            <td><a><i class="fas fa-edit"></i></a></td>
                            <td><a><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">No records found</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>


</div>
