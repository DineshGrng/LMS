<x-app-layout>
    <div class="card">
        <div class="card-header justify-content-between">
            <span>
                <h3>Book's Issued</h3>
            </span>
            <span>
                <a href="{{ route('bookissue.create') }}" class="btn btn-primary btn-sm">Issue Book's</a>
            </span>
        </div>
        <div class="card-body">
            <table class="table" id="datatable">
                <thead>
                    <tr>
                        <th>sn</th>
                        <th>Student</th>
                        <th>Book </th>
                        <th>Issue Date</th>
                        <th>Expiry Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
              <tbody>
                @foreach ($bookissus as $index => $bookissue)
                <tr>
                    <td>{{ ++$index }}</td>
                    <td>{{ $bookissue->student->name }}</td>
                    <td>{{ $bookissue->book->name }}</td>
                    <td>{{ $bookissue->created_at->format('d-M-y') }}</td>
                    <td>
                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $bookissue->expiry_date)->format('d-M-y') }}
                    </td>
                    <td>
                        <span class="badge {{ $bookissue->status == 'in' ? 'bg-success' : 'bg-danger' }} text-white">{{ $bookissue->status }}</span>
                    </td>
                    <td>
                        <form action="{{ route('bookissue.update', $bookissue->id) }}" method="post">
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
