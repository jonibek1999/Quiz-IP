


        <form action="{{ route('taskCreate') }}" method="post">
            <div id="myDIV" class="header">
              <h2>My To Do List</h2>
              @if(Auth::check())
              <input type="text" name="title" placeholder="Title...">
              @csrf
              <button type="submit" class="addBtn">Add</button>
               @endif
            </div>
        </form>
