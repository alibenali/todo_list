<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <form method="POST" action="{{ route('todo.update', $todo->id) }}">
            @csrf
            @method('PUT')
            <input name="goal" placeholder="Write something todo..." value="{{ $todo->goal }}">
            <input type="date" name="deadline" value="{{ $todo->deadline }}">
            <button type="submit">Save</button>
        </form>
    </body>
</html>
