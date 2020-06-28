@extends('admin.layouts')

@section('content')
    <form action="{{empty($data) ? route('admin.datasource.store'):route('admin.datasource.update', $data)}}" class="form-horizontal" method="post">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">所属分类</label>
            <div class="col-sm-10">
                <select name="data_model"  class="form-control">
                    <!-- <option value="">请选择</option> -->
                    @foreach(App\Models\Datasource::TYPES as $k => $v)
                        <option value="{{$k}}" @if($k == request()->type) selected @endif>{{$v}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">名称</label>
            <div class="col-sm-10">
               <input type="text" name="name" class="form-control" value="{{$data->name??''}}">
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
               <button class="btn btn-primary">确定</button>
            </div>
        </div>

        @csrf 
        @isset($data) @method('PUT') @endisset
        
    </form>
    <x-admin.error/>
@endsection