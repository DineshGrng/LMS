<x-app-layout>
    <div class="card">
        <div class="card-header justify-content-between">
            <span>
                <h3> Book List</h3>
            </span>
            <span>
                <a href="{{ route('book.create') }}" class="btn btn-primary btn-sm">Add New </a>
            </span>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>sn</th>
                    <th>Name</th>
                    <th>Publication with Ed</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->publication }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->price }}</td>
                        <td>{{ $book->quantity }}</td>
                        <td>
                            <a href="{{ route('book.edit', $book->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>
