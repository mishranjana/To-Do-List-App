@extends('layouts')
@section('content')
<div>
    <div class="float-left">
        <h4 class= pb-3>My Task</h4>
    </div>
    <div class="float-right">
   <a href="{{ route('task') }}" class="btn btn-info">
       <i class ="fa fa-plus-circle"></i> Create Task
   </a>
    </div>
    <div class="clearfix"></div>
</div>


@foreach ( $tasks as $task )
    <div class="card mt-3">
    <h5 class="card-header">
        @if ($task->status === "ToDo")
        {{ $task ->title }}
       @else 
       <del>{{ $task ->title }}</del>
        @endif
        <span class="badge badge-pill badge-warning">
           {{ $task->created_at->diffForHumans() }}
        </span>
    </h5>
    <div class="card-body">
        <div class="card-text">
            <div class="float-left">
                @if ($task->status === "ToDo")
                {{ $task ->description }}
               @else 
               <del>{{ $task ->description }}</del>
                @endif
       <br>
       @if ($task->status === "ToDo")
       <span class="badge badge-pill badge-info">ToDo</span>
      @else 
      <span class="badge badge-pill badge-success text-white">Done</span>
       @endif
       
       <small>Last Updated- {{ $task->updated_at->diffForHumans() }}</small>
            </div>
            <div class="float-right">
           <a href="{{ route('edit' ,$task->id) }}" class="btn btn-success">
           <i class="fa fa-edit"></i> 
           </a>
           <form action="{{ route('destroy' , $task->id) }}" style="display:inline" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">
           <i class="fa fa-trash"></i> 
            </a>
            </form>
           
            </div>
            <div class="clearfix"></div>

         
        </div>
      </div>
</div>
@endforeach

@if (count($tasks) === 0)
<div class="alert alert-danger p-2">
    No Task Found .Please Create One Task
    <br>
    <br>
    <a href="{{ route('task') }}" class="btn btn-info btn-sm">
        <i class ="fa fa-plus-circle"></i> Create Task
    </a>
</div>
    
@endif
  @endsection