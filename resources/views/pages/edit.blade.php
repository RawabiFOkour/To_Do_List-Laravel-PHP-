@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-center ">

        <form method="post" action="/update/{{$task->id}}" >
            @method('PATCH')
            @csrf
            <h1  style="margin-left:90px; margin-top: 70px">Edit Task</h1>

            <div class="form-group" style="width: 400px; margin-top: 70px">
                <input type="text" name="task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$task->task}}" placeholder="Edit Task ...">
            </div>
            <div class="form-group" style="width: 400px; margin-top: 70px">
                <input type="text" name="is_completed" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$task->is_completed}}" placeholder="Edit is_completed ...">
            </div>

            <button type="submit" style=" margin-left: 150px" class="btn btn-primary">Edit</button>
        </form>
    </div>

@endsection()
