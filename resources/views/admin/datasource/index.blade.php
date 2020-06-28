@extends('admin.layouts')

@section('content')
    <p><a class="btn btn-info" href="{{route('admin.datasource.create')}}">添加</a></p>
    <table class="table" id="dataTables-example">
        <thead>
            <th>名字</th>
            <th>操作</th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    <td>{{$v->name}}</td>
                    <td>
                        <a href="{{route('admin.datasource.edit', $v)}}" class="fa fa-edit mr-4"></a>
                        <a href="#trash-o" data-type="delete" data-url="{{route('admin.datasource.destroy', $v)}}"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection