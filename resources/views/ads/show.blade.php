@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="title">{{ $ad->title }}</h3>
        <div class="type">
            {{ $ad->type }}
        </div>
        <br>
        <small>{{ $ad->created_at->diffForHumans() }}</small>
        <p>{{ $ad->body }}</p>
        <p>{{ $ad->phone_number }} / {{ $ad->email }}</p>

        <p>{{ $ad->city }}, {{ $ad->area }}</p>
        <p>
            <a href="../users/{{$ad->user->id}}">{{ $ad->user->name }}</a>
        </p>
        <button class="btn btn-primary">{{ $ad->price }} eur</button>
        <br>
        <small>
            <a href="../ads">Back</a>
        </small>
    </div>
@endsection