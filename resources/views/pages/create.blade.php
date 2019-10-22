@extends('layouts.app')

@section('content')
 <div class="d-flex justify-content-center ">

    <form method="post" action="/create">
        <h1  style="margin-left:90px; margin-top: 70px">Create Tasks</h1>
        {{csrf_field()}}
        <div class="form-group" style="width: 400px; margin-top: 70px">
            <input type="text" name="task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Task ...">
        </div>

        <button type="submit" style=" margin-left: 150px" class="btn btn-primary">Create</button>
    </form>
 </div>
@endsection()
