@extends('layouts.app')
@section('content')

@include('layouts.nav')

<div class="container">
    <div class="profile">
        <h1>{{ $user->name }}</h1>  
        <br>
        
        @can ('update', $user)
            <form method="POST" action="{{ route('avatar', $user) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="file" name="avatar">
                <button type="submit" class="btn-primary">Upload Avatar</button>
            </form>
        @endcan 
        
        @if($user->avatar_path)
            <img src="/storage/{{ $user->avatar_path }}" width="200">
        @else
            <img src="/storage/avatars/default.png" width="200">
        @endif
        <p>Lorem ipsum dolor amet sustainable biodiesel vegan, scenester salvia crucifix prism normcore. Franzen biodiesel master cleanse hashtag, kombucha godard banjo iceland tilde thundercats meggings poutine adaptogen. Glossier kinfolk la croix, everyday carry lumbersexual pop-up pok pok hoodie gentrify shabby chic readymade green juice listicle pickled. Shaman typewriter flannel YOLO sustainable, everyday carry street art unicorn coloring book activated charcoal. Affogato ennui cronut locavore wolf tousled banjo wayfarers.</p>
    </div>
</div>

@endsection