<x-app-layout>
    <div class="card">
        <div class="card-header justify-content-between">
            <span>
                <h3>Issue Book's</h3>
            </span>
            <span>
                <a href="{{ route('bookissue.index') }}" class="btn btn-primary btn-sm">Back</a>
            </span>
        </div>
        <div class="card-body">
            <form action="{{ route('bookissue.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="bookID">Enter BookID</label>
                <input id="bookID" class="form-control" type="text" name="bookID">
            </div>
           <div class="form-group">
            <label for="book_id">Select Book</label>
            <select id="book_id" class="form-control" name="book_id">
                @foreach ($books as $book)
                <option value="{{ $book->id }}">{{ $book->name }}- Stock({{ $book->quantity }})</option>

                @endforeach
            </select>
           </div>
           <div class="form-group">
            <label for="student_id">Select Student</label>
            <select id="student_id" class="form-control" name="student_id" onchange="loadauto();">
               @foreach ($students as $student)
               <option value="{{ $student->id }}">{{ $student->name }}</option>

               @endforeach
            </select>

        </div>
        <div class="py-3">
            <h5>Student Details</h5>
            <address>
                <span class="font-bold">Name :  </span><span id="rname">example</span><br>
                <span class="font-bold">ID :  </span><span id="rid">0000</span><br>
                <span class="font-bold">Phone :  </span><span id="rphone">9800000000</span><br>
                <span class="font-bold">email :  </span><span id="remail">example@gmail.com</span><br>
                <span class="font-bold">Faculty :  </span><span id="rfaculty">BIM</span>
            </address>

        </div>
        <div class="form-group">
            <label for="days">Days</label>
            <input id="days" class="form-control" type="text" name="days">
        </div>
        <div>
            <button type="submit" class="btn btn-success btn-lg">Save Records</button>
        </div>

            </form>
        </div>
    </div>
</x-app-layout>
