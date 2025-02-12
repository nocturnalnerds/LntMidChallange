<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-primary">Employee List</h1>
            <form action="{{ route('createView') }}" method="GET">
                <button type="submit" class="btn btn-success">Insert New Employee</button>
            </form>
        </div>

        @if ($employees->isEmpty())
        <div class="alert alert-warning text-center">No employees found.</div>
        @else
        <div class="list-group">
            @foreach ($employees as $employee)
            <div class="list-group-item p-4 shadow-sm mb-3">
                <h5 class="mb-2"><strong>{{ $employee->name }}</strong></h5>
                <p class="mb-1"><strong>Age:</strong> {{ $employee->age }}</p>
                <p class="mb-1"><strong>Phone:</strong> {{ $employee->phone }}</p>
                <p class="mb-3"><strong>Address:</strong> {{ $employee->address }}</p>
                <div class="d-flex gap-2">
                    <form action="{{ route('edit', $employee->id) }}" method="GET">
                        <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                    </form>
                    <form action="{{ route('delete', $employee->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>