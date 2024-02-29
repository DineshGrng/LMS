<x-app-layout>
    <section>
        <div class="card">
            <div class="card-header justify-content-between">
                <span>
                    <h3>Students List</h3>
                </span>
                <span>
                    <a href="{{ route('student.create') }}" class="btn btn-primary btn-sm">Create New</a>
                </span>
            </div>
            <div class="card-body">

                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>sn</th>
                            <th>Sid</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Faculty</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $index => $student)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $student->sid }}</td>
                                <td>
                                    <img src="{{ asset($student->photo) }}" alt=""
                                        style="height:75px; width: auto">
                                </td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->faculty }}</td>
                                <td>
                                    <a href="{{ route('student.show', $student->id) }}"
                                        class="btn btn-success btn-sm">Show</a>
                                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </section>
</x-app-layout>
