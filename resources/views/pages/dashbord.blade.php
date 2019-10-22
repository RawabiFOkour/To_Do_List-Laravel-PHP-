@extends('layouts.app')

@section('content')
<body>

    <div class="d-flex justify-content-end mr-4 mb-4">
        <button type="submit" name="delete" class="btn btn-danger"  > <a href="/create" style="color: white"> Create</a>  </button>
    </div>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Task</th>
        <th scope="col">Is_Completed</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tasks as $task)
    <tr>
        <th scope="row">{{$task->id }}</th>
        <td>{{$task->task }}</td>
        <td>@if ($task->is_completed === 0)
                NO
            @elseif($task->is_completed === 1)
                YES
            @endif
        </td>

        <td>
            <form method="POST" action="/delete/{{$task->id }}" >
                @method('DELETE')
                @csrf
                <button type="submit" name="delete" class="btn btn-warning"> Delete </button>
            </form>

            <button type="submit" name="edit" class="btn btn-info" style="width: 68px;margin-top: 20px;"><a style="color: white" href="/edit/{{$task->id }}">Edit</a></button>

        </td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection
