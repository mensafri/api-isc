<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container py-5">
    <h1 class="mb-4">Task Manager</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('tasks.store') }}" method="post" class="row g-2 mb-4">
        @csrf
        <div class="col-md-4">
            <input name="title" class="form-control" placeholder="Title" required>
        </div>
        <div class="col-md-5">
            <input name="description" class="form-control" placeholder="Description">
        </div>
        <div class="col-md-3 d-grid">
            <button class="btn btn-primary">Add Task</button>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        <form action="{{ route('tasks.destroy', $task) }}" method="post">
                            @csrf @method('delete')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">✖</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $tasks->links() }}
</body>

</html>