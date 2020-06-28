@extends('admin.layouts')

@section('content')
    <table class="table">
        <thead>
            <th>客户名称</th>
            <th>所属行业</th>
            <th>客户等级</th>
            <th>网址</th>

            <th></th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    
                    <td>{{ $v->name }}</td>
                    <td>{{ $v->industry->name }}</td>
                    <td>{{ $v->level->name}}</td>
                    <td>{{ $v->website }}</td>
                    
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection