@extends('master')
@section('content')
<p class="fs-2 m-0 bg-secondary text-white">Publisher List</p>
<div class="row">
    @foreach($publisher as $pb)
    <div class="col-3" style="background-color:">
        <div class="card" style="width: ;">
            <img src="{{$pb->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $pb->name }}</h5>
                <p>{{ $pb->address }}</p>
                <a href="/detail-publisher/{{ $pb->id }}" class="btn btn-primary" title="Book Detail">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
