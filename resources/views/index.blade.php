@extends('master')
@section('content')
<p class="fs-2 m-0 bg-secondary text-white">{{ $title }}</p>
<div class="row d-flex justify-content-center">
    @foreach ($books as $book)
    <div class="col" style="background-color:">
        <div class="card pb-3" style="width: 15rem;">
            <img src="{{-- /assets/cover.jpg --}} {{ $book->image }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> {{ $book->title }}</h5>
                <p class="card-text">by</p>
                <p class="author-name">{{ $book->author }}</p>
                <a href="/detail/{{ $book->id }}" class="btn btn-primary" title="Book Detail">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
