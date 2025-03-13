@extends('tasks.layout')

@section('content')
<h2>Create Task</h2>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="pending">Pending</option>
            <option value="completed">Completed</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Save Task</button>
</form>
@endsection
