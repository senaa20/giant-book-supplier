@extends('master')
@section('content')
<div class="bg-secondary text-white">
    <p class="fs-2">{{ $datapublisher->name }}</p>
    <p>{{ $datapublisher->address }}</p>
    <p>{{ $datapublisher->phone }}</p>
    <p>{{ $datapublisher->email }}</p>
</div>

<div class="row">
    @foreach($databuku as $db)
        <div class="col-3" style="background-color:">
            <div class="card" style="width: ;">
                <img src="{{ $db->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $db->title }}</h5>
                    <p class="card-text">by</p>
                    <p class="author-name">{{ $db->author }}</p>
                    <p class="publisher"> {{ $datapublisher->name }}</p>
                    <a href="/detail/{{ $db->id }}" class="btn btn-primary" title="Book Detail">Detail</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
