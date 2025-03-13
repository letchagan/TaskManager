@extends('tasks.layout')

@section('content')
<h2>Task List</h2>
<a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Add Task</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    @foreach ($tasks as $task)
    <tr>
        <td>{{ $task->title }}</td>
        <td>{{ $task->description }}</td>
        <td>{{ $task->status }}</td>
        <td>
            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;" class="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<script>
    $(".delete-form").submit(function(e) {
        if (!confirm("Are you sure you want to delete this task?")) {
            e.preventDefault();
        }
    });
</script>
@endsection
