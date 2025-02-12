<h1>
    TEST!
</h1>
@if ($employees->isEmpty())
<p>No employee</p>
@else
@foreach ($employees as $employee)
<p>ID: {{ $employee->id }}</p>
<p>Name: {{ $employee->name }}</p>
<p>Age: {{ $employee->age }}</p>
<p>Phone: {{ $employee->phone }}</p>
<p>Address: {{ $employee->address }}</p>
<form action="{{ route('edit', $employee->id) }}" method="GET">
    <button type="submit">Edit</button>
</form>
<form action="{{ route('delete', $employee->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
@endforeach
@endif