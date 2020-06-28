@extends('admin.layouts')

@section('content')
    <table class="table">
        <thead>
            <th>合同编号</th>
            <th>合同名称</th>
            <th>客户名称</th>
            <th>商机名称</th>
            <th>合同金额</th>
            <th>回款日期</th>
            <th>开始时间</th>
            <th>结束时间</th>
            <th></th>
        </thead>

        <tbody>
            @foreach($datas as $v)
                <tr>
                    <td>{{ $v->number }}</td>
                    <td>{{ $v->name }}</td>
                    <td>{{ $v->customer_id }}</td>
                    <td>{{ $v->business_id }}</td>
                    <td>{{ $v->total_amount }}</td>
                    <td>{{ $v->pay_date }}</td>
                    <td>{{ $v->start_date }}</td>
                    <td>{{ $v->end_date }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection