@extends('admin.layouts')

@section('content')
    <div class="card">
        <!-- <img class="card-img-top" src="images/bg-title-01.jpg" alt="Card image cap"> -->
        
            @foreach($feedback->pictures as $v)
            <img src="{{ asset('storage/'.$v) }}" alt="">
            @endforeach
       
        <div class="card-body">
            <!-- <h4 class="card-title mb-3">Card Image Title</h4> -->
            <p class="card-text">
                {{ $feedback->content }}
            </p>
        </div>
    </div>
    <x-admin.replyfeedback :feedback="$feedback"/>
@endsection