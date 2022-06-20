@extends('layouts')
@section('content')
<div>
    <div class="float-left">
        <h4 class= pb-3>Edit task  <span class="badge bg-info">{{ $task->title }}</span>
        </h4>
    </div>
    <div class="float-right">
   <a href="{{ route('index') }}" class="btn btn-info">
       <i class="fa fa-arrow-left"></i> All Task
   </a>
    </div>
    <div class="clearfix"></div>
</div>

<div class="card card-body bg-light p-4">
    <form action="{{ url('update', $task->id) }} " method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" id="description" name="description" rows="5" value="{{ $task->description }}"></textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
           <select name="status" id="status" class="form-control">
          @foreach ($statuses as $status )
              <option value="{{ $status['value'] }}" {{ $task->status ===  $status['value'] ? 'selected' :'' }}> {{ $status['label'] }}</option>
          @endforeach
           </select>
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i> Save</button>
      </form>

</div>
  @endsection>