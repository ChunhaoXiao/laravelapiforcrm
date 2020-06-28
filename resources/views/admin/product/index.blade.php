@extends('admin.layouts')

@section('content')
    <table class="table">
        <thead>
            <th>缩略图</th>
            <th>产品名称</th>
            <th>产品价格</th>
            <th>状态</th>

            <th></th>
        </thead>
        <tbody>
            @foreach($datas as $v)
                <tr>
                    <td><img src="{{$v->cover}}" width="50" height="50"/></td>
                    <td>{{$v->name}}</td>
                    <td>{{$v->price}}</td>
                    <td>{{$v->is_on_sale == 1?'已上架': '已下架'}}</td>
                    
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection