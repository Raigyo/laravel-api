@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit task
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('tasks.update', $task->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Titre:</label>
          <input type="text" class="form-control" name="title" value={{ $task->title }} />
        </div>
        <div class="form-group">
          <label for="price">Description:</label>
          <input type="text" class="form-control" name="description" value={{ $task->description }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection
