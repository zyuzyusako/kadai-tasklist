@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
      @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    {{-- メッセージ詳細ページへのリンク --}}
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                    
                       
                </tr>
                @endforeach
            </tbody>
             
        </table>
        {{-- ページネーションのリンク --}}
        {{ $tasks->links() }}

        {{-- メッセージ作成ページへのリンク --}}
        {!! link_to_route('tasks.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}
    @endif


@endsection
