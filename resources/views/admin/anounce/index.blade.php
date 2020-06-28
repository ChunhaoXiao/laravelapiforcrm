@extends('admin.layouts')

@section('content')
    <p class="p-2"><a href="{{route('admin.anounce.create')}}" class="btn btn-info">添加公告</a></p>
    <table class="table">
        <thead>
            <th>公告标题</th>
            <th>创建时间</th>
            
            <th>操作</th>
            
            <th></th>
        </thead>

        <tbody>
            @foreach($datas as $v)
                <tr>
                    <td>{{ $v->title }}</td>
                    <td>{{ $v->created_at }}</td>
                  
                    
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection