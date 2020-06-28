@extends('admin.layouts')

@section('content')
    <form action="{{route('admin.aboutus.store')}}" method="post">
        <div class="form-group row">
            <lable class="col-sm-1 col-form-label">
                内容
            </lable>
            <div class="col-sm-10">
                <textarea name="content" class="form-control" rows="10">{{$data->content??''}}</textarea>
            </div>
        </div>

        @csrf
        <div class="row form-group">
            <label for="" class="col-sm-1"></label>
            <div class="col-sm-10">
            <button class="btn btn-success">确定</button>
            </div>
        </div>
    </form>
    <x-admin.error/>
@endsection