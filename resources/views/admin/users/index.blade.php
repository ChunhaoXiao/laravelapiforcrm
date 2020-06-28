@extends('admin.layouts')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <td>
                    <label class="au-checkbox">
                        <input type="checkbox">
                        <span class="au-checkmark"></span>
                    </label>
                </td>
                <td>用户名</td>
                <td>创建时间</td>
                <td>查看</td>
                <!-- <td>客户数量</td>
                <td>线索数量</td>
                <td>产品数量</td>
                <td>商机数量</td>
                <td>合同数量</td> -->

                <td>操作</td>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $v)
            <tr>
                <td></td>
                <td>
                    {{ $v->name }}
                    <!-- <label class="au-checkbox">
                        <input type="checkbox">
                        <span class="au-checkmark"></span>
                    </label> -->
                </td>
                <td>
                    <!-- <div class="table-data__info">
                        <h6>lori lynch</h6>
                        <span>
                            <a href="#">johndoe@gmail.com</a>
                        </span>
                    </div> -->
                    {{ $v->created_at }}
                </td>
                <td>
                    <!-- <span class="more">
                        <i class="zmdi zmdi-more"></i>
                    </span> -->
                    <div class="dropdown">
                    <!-- <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        查看
                    </a> -->
                    <img src="{{asset('images/menu.png')}}" alt="" id="dropdownMenuLink" data-toggle="dropdown" width="30" height="20">

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{route('admin.thread.index', $v)}}">线索</a>
                        <a class="dropdown-item" href="{{ route('admin.products.index', $v) }}">产品</a>
                        <a class="dropdown-item" href="{{ route('admin.contract.index', $v) }}">合同</a>
                        <a class="dropdown-item" href="{{ route('admin.customer.index', $v) }}">客户</a>
                        <a class="dropdown-item" href="{{ route('admin.business.index', $v) }}">商机</a>
                        <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                    </div>
                </td>
                <!-- <td>
                    <div class="rs-select2--trans rs-select2--sm">
                        <select class="js-select2" name="property">
                            <option selected="selected">Full Control</option>
                            <option value="">Post</option>
                            <option value="">Watch</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </td> -->
                <td>
                    <!-- <span class="more">
                        <i class="zmdi zmdi-more"></i>
                    </span> -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>        
@endsection