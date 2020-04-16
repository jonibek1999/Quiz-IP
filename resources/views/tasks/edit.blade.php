@extends('layouts.editTaskLayout')


@section('editTask')


        <form action="{{ route('taskEdit') }}" method="post">
            <div id="myDIV" class="header">
            <h2></h2>
              <input type="text" name="title" placeholder="Title..." value = '{{ $task->title }}'>
              @csrf
              <input type="hidden" name="id" value="{{ $task->id }}">
              <button type="submit" class="addBtn">Edit</button>
            </div>
        </form>
@endsection
