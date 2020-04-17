@extends('layouts.firstpage')


@section('task')

@if(Auth::check() )
<ul id="myUL">
@foreach($tasks as $task)
    @if(Gate::denies('task-checking', $task))
    @else
       <li>
            <div class="task">
                {{ $task->title }}
            </div>
            <div class="action">
                <a href="{{ route('getTaskEdit', ['id'=> $task->id ]) }}"><i class="fa fa-edit"></i></a>
            </div>
            <div class="action" >
                <a href="{{ route('taskDelete', ['id'=> $task->id ]) }}"><i class="fa fa-trash-alt"></i></a>
            </div>
       </li>
    @endif
@endforeach
@endif
</ul>
@endsection
