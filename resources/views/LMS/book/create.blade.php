<x-app-layout>
    <div class="card">
        <div class="card-header justify-content-between">
            <span>
                <h3>Add New Book's</h3>
            </span>
            <span>
                <a href="{{ route('book.index') }}" class="btn btn-primary btn-sm">Back</a>
            </span>
        </div>
        <div class="card-body ">
            <form action="{{ route('book.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Book Name</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="publication">Publication with Book Editions <br>
                        <span class="text-warning">eg: Asmita 8th</span>
                    </label>
                    <input id="publication" class="form-control" type="text" name="publication">
                </div>
                <div class="form-group">
                    <label for="author">Author of Book</label>
                    <input id="author" class="form-control" type="text" name="author">
                </div>
                <div class="form-group">
                    <label for="price">Book Price</label>
                    <input id="price" class="form-control" type="text" name="price">
                </div>
                <div class="form-group">
                    <label for="pages">Book Pages</label>
                    <input id="pages" class="form-control" type="text" name="pages">
                </div>
                <div class="form-group">
                    <label for="quantity">Book Quantity</label>
                    <input id="quantity" class="form-control" type="text" name="quantity">
                </div>
                <div>
                    <button type="submit" class="btn btn-success btn-lg">Save Records</button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
