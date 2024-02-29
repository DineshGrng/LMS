<x-app-layout>
    <div class="card">
        <div class="card-header justify-content-between">
            <span>
                <h3>Create New Account</h3>
            </span>
            <span>
                <a href="{{ route('student.index') }}" class="btn btn-primary btn-sm">Back</a>
            </span>
        </div>
        <div class="card-body">
            <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="sid">Student Id:</label>
                        <input id="sid" class="form-control" type="text" name="sid">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="faculty">Faculty</label>
                        <input id="faculty" class="form-control" type="text" name="faculty">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="text" name="email">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone">Phone</label>
                        <input id="phone" class="form-control" type="text" name="phone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo">Upload Image</label>
                    <input id="photo" class="form-control-file" type="file" name="photo">
                </div>
                <button type="submit" class="btn btn-success btn-lg">Save Record</button>
            </form>
        </div>
    </div>
</x-app-layout>
