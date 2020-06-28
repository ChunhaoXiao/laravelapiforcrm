@extends('admin.layouts')

@section('content')
    <form action="{{route('admin.anounce.store')}}" method="post">
    <div class="form-group row">
            <lable class="col-sm-1 col-form-label">
                公告标题
            </lable>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" value="{{$data->title??''}}">
            </div>
        </div>
        <div class="form-group row">
            <lable class="col-sm-1 col-form-label">
                公告内容
            </lable>
            <div class="col-sm-10">
                <textarea name="content" class="form-control" rows="10">{{$data->content??''}}</textarea>
            </div>
        </div>

        @csrf
        <div class="row form-group">
            <label for="" class="col-sm-1"></label>
            <div class="col-sm-10">
            <button class="btn btn-primary">确定</button>
            </div>
        </div>
    </form>
    <x-admin.error/>
@endsection