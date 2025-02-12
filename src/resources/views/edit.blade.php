<div class="container mt-5">
    <div class="row">
        <form action="{{ route('update', $employee->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" required>
            </div>
            <div class="form-group">
                <label for="content">Age:</label>
                <textarea class="form-control" id="age" name="age" rows="4" required>{{ $employee->age }}</textarea>
            </div>
            <div class="form-group">
                <label for="content">Phone:</label>
                <textarea class="form-control" id="phone" name="phone" rows="4"
                    required>{{ $employee->phone }}</textarea>
            </div>
            <div class="form-group">
                <label for="content">Address:</label>
                <textarea class="form-control" id="address" name="address" rows="4"
                    required>{{ $employee->address }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Note</button>
        </form>
    </div>
</div>