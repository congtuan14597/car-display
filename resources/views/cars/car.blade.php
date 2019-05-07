@extends('layouts.header')

@section('content')
<div class="container">
    @foreach($cars->chunk(3) as $carChunk)
    <div class="row">
        @foreach($carChunk as $car)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ $car->imagePath }}" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>{{ $car->name }}</h3>
                    <p class="description">{{ $car->description }}</p>
                    <div class="clearfix">
                        <div class="pull-left price">{{ $car->price }}</div>
                        <a href="#" class="btn btn-success pull-right" role="button">Show</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach

    <div class="paginate">
        {{ $cars->links() }}
    </div>

@endsection
