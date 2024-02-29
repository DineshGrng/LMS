<x-app-layout>
    <div class="card">
        {{-- <div class="d-flex gap-2">
            <div>
                1
            </div>
            <div>
                2
            </div>
        </div> --}}
        <div class="card-header justify-content-between">
            <span>
                <h3>Student Detail's</h3>
            </span>
            <span>
                <a href="{{ route('student.index') }}" class="btn btn-primary btn-sm">Back</a>
            </span>
        </div>
        <div class="card-body">
            <div class="row mb-5">
                <div class="col-md-3 mx-3 ">
                    <td>
                        <img src="{{ asset($student->photo) }}" alt="" style="height:275px; width: auto">
                    </td>
                </div>
                <div class="my-5 fs-3 ">
                   <span>Name: {{ $student->name }}</span> <br>
                   <span>Sid: {{ $student->sid }}</span> <br>
                   <span>email: {{ $student->email }}</span> <br>
                   <span>Contact: {{ $student->phone }}</span> <br>
                   <span>Faculty: {{ $student->faculty }}</span> <br>
                </div>
            </div>
            <div class="text-center">
                <h3>Book's issued by {{ $student->name }}</h3>
            </div>
            <table class="table" id="datatable">
                <thead>
                    <tr>
                        <th>Sn</th>
                        {{-- <th>Student</th>
                        <th>Photo</th> --}}
                        <th>Book</th>
                        <th>Issue</th>
                        <th>Expiry</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="py-5">
                    @foreach ($student->book_issues as $index => $issue)
                        <tr>
                            <td>{{ ++$index }} </td>
                            {{-- <td>{{ $issue->student->name }}</td>
                            <td>
                                <img src="{{ asset($student->photo) }}" alt="" style="height:75px; width: auto">
                            </td> --}}
                            <td>{{ $issue->book->name }}</td>

                            <td>{{ $issue->created_at->format('d-M-y') }}</td>
                            <td>
                                {{ \Carbon\Carbon::createFromFormat('Y-m-d', $issue->expiry_date)->format('d-M-y') }}
                            </td>
                            <td>
                                <span
                                    class="badge {{ $issue->status == 'in' ? 'bg-success' : 'bg-danger' }} text-white">{{ $issue->status }}</span>
                            </td>
                            <td>
                                <form action="{{ route('bookissue.update', $issue->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <button type="submit" class="btn btn-success btn-sm">Collect</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
