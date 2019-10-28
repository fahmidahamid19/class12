<html>
<head>
    <title>To Do App</title>

</head>
<body>
<div class="row ">
    <div class="main">
        <div class="col-4 offset-4">
            @include('error.errors')
            <form action="{{ route('data.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="text" name="name"><br>
                <textarea name="task"></textarea>
                <input type="file" name="image">
                <input type="submit" name="submit" value="Add">
            </form>
        </div>
       <div class="show">
           @if(session('updateSuccess'))
               {{ session('updateSuccess') }}
               @endif
               @if(session('deleteSuccess'))
                   {{ session('deleteSuccess') }}
               @endif
           <table border="1px">
               <tr>
                   <td>Name</td>
                   <td>Task</td>
                   <td>img</td>
                   <td>action</td>
               </tr>
               @foreach($alldata as $data)


               <tr>
                   <td>{{ $data->name }}</td>
                   <td> {{ $data->task }}</td>
                   <td>
                       @if($data->img==null)
                           <p>Image not found</p>
                           @else
                           <img src="{{asset('photos/' .$data->img)}}"alt="" width="200px">
                           @endif
                       </td>
                   <td>
                       <a href="{{ route('data.edit.show',[$data->id]) }}">Edit</a>||<a onclick="return confirm('Are You Sure?')" href="{{ route('data.delete',[$data->id]) }}">Delete</a>
                   </td>
               </tr>
               @endforeach
           </table>
       </div>
    </div>
</div>

</body>
</html>
