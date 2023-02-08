@extends('layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="card text-center mb-5">
                        <img src="{{ $comic['thumb'] }}" class="img-fluid" alt="Comic thumb">
                        <div class="description">
                            <h4>
                                {{ $comic['title'] }}
                            </h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection