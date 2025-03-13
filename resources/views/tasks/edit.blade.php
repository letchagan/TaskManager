@extends('tasks.layout')

@section('content')
<h2>Edit Task</h2>

<form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ $task->description }}</textarea>
    </div>
    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update Task</button>
</form>
@endsection
