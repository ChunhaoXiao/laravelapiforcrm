@extends('admin.layouts')

@section('content')
    <table class="table">
        <thead>
            <th>商机名称</th>
            <th>客户</th>
            <th>预计成交日期</th>
            <th>商机等级</th>
            
            <th></th>
        </thead>

        <tbody>
            @foreach($datas as $v)
                <tr>
                    <td>{{ $v->name }}</td>
                    <td>{{ $v->customer->name }}</td>
                    <td>{{ $v->expected_deal_date }}</td>
                    <td>{{ $v->level->name }}</td>
                    
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection