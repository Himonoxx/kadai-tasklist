@extends('layouts.app')

@section('content')
    var_dump($task->id
    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->user_id }}</td>
        </tr>
        <tr>
            <th>Task</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
        <div class="btn-toolbar">
            <div class="btn-group">
                @if(Auth::id() == $task->user_id)
                {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-primary']) !!}
                    {!! Form::open(['route'=>['tasks.destroy',$task->id],'method'=>'delete']) !!}        
                        {!! Form::submit('削除',['class'=>'btn btn-danger ml-1']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
        </div>
@endsection