@extends('layouts')
@section('content')
<div>
    <div class="float-left">
        <h4 class= pb-3>Create task</h4>
    </div>
    <div class="float-right">
   <a href="{{ route('index') }}" class="btn btn-info">
        <i class="fa fa-arrow-left"></i> All Task
   </a>
    </div>
    <div class="clearfix"></div>
</div>

<div class="card card-body bg-light p-4">
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" id="description" name="description" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
           <select name="status" id="status" class="form-control">
          @foreach ($statuses as $status )
              <option value="{{ $status['value'] }}"> {{ $status['label'] }}</option>
          @endforeach
           </select>
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
             save
        </button>
      </form>

</div>
  @endsection>