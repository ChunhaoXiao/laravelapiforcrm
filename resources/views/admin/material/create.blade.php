@extends('admin.layouts')

@section('content')
    <div class="row">
        <div class="col-sm-5">
            <form action="{{route('admin.material.store')}}" enctype="multipart/form-data" method="post">
                <div class="row form-group">
                    <div class="col col-sm-4">
                        <label for="file-input" class=" form-control-label">个人中心背景图</label>
                    </div>
                    <div class="col-12 col-md-8">
                        <input type="file" id="file-input" name="my_bg" class="form-control-file">
                    </div>
                </div>
                @csrf
                <div class="row">
                    <div class="col-sm col-sm-offset-4">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i>提交
                        </button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
    
@endsection