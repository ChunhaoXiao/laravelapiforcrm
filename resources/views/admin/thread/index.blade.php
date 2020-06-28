@extends('admin.layouts')

@section('content')
    <table class="table">
        <thead>
            <th>线索名称</th>
            <th>线索来源</th>
            <th>线索级别</th>
            <th>客户名称</th>
            <th>电话</th>
            <th>所在行业</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    <td>{{$v->name}}</td>
                    <td>{{$v->src->name}}</td>
                    <td>{{$v->level->name}}</td>
                    <td>{{$v->customer_name}}</td>
                    <td>{{$v->mobile}}</td>
                    <td>{{$v->industry->name}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection