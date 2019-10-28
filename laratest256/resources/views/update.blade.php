@include('error.errors')
<form action="{{ route('data.update',[$data->id]) }}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name" value="{{ $data->name }}"><br>
    <textarea name="task" >{{ $data->task }}</textarea>
    <input type="submit" name="submit" value="Add">
</form>
