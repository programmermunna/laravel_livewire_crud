<div>
    @include('livewire.studentmodal')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                    <h6 class="alert alert-success">{{ session('message') }}</h6>
                @endif
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h4>Laravel Livewire Crud with Bootstrap Modal</h4>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#student_add_modal">Add Student</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Course</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>

                                @forelse ($students as $student)
                                <tr>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>
                                        <a href="" class="btn btn-primary">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                    <h3 colspan="5">No Data Found</h3>
                                @endforelse
                            </tbody>
                          </table> 
                          {{ $students->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
