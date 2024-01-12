@extends('layouts.app');

@section('content')
    <div class="container">
        <h2 class="mt-5">Current series</h2>
        <div class="row row-cols-6 d-flex flex-wrap">
            @foreach ($books as $single_book)
            <div class="col h-100">
                <div>
                    <img src="{{ $single_book['thumb'] }}" alt="">
                    <h4>{{ $single_book['series'] }}</h4>
                </div>
            </div>
                
            @endforeach
            
        </div>
    </div>
@endsection
