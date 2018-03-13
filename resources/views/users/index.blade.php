@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Mano skelbimai:</h2>
        <small>Viso rodomi {{ count($ads) }} skelbimai</small>
            @foreach($ads as $ad)
                <div class="ad">
                    <div class="title">
                        <a href="../ads/{{ $ad->id }}">
                            <h5 class="title">{{ $ad->title }}</h5>
                            <div class="type">
                                {{ $ad->type }}
                            </div>
                        </a>
                    </div>
                    <div class="body">
                        {{ substr($ad->body, 0, 150) }}... <br>
                        <small> {{ $ad->city }}</small>
                        <small> {{ $ad->area }}</small>
                        <small> {{ $ad->price }}eur / h</small>
                    </div>
                </div>
                <hr>
            @endforeach
    </div>
@endsection