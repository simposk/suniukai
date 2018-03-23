@extends('layouts.app')
@section('content')

    @include('layouts.nav')
    <div class="container ads-container">
        <div class="search">
            <input type="text" placeholder="Search">
            <button type="submit">Go</button>
        </div>
        
        <h2>My postings:</h2>
        <small class="gap"><em>Showing {{ count($ads) }} results</em></small>    

        <div class="ads">
            @foreach($ads as $ad)
                <div class="ad">
                    {{-- ///////////////////////////////////// --}}
                    <div class="content">              
                    
                        <div class="ad-thumb">
                            <img src="http://via.placeholder.com/250x250">
                        </div>  
                            
                        <div class="text">
                            <div class="title">
                                <a class="link" href="../ads/{{ $ad->id }}">
                                    <h5 class="title">{{ substr($ad->title, 0, 100) }}</h5>
                                </a>
                            </div>

                            <div class="body">
                                <p>{{ substr($ad->body, 0, 150) }}... <br></p>

                                <p class="date">
                                    <small>{{ $ad->created_at->diffForHumans() }} by 
                                        <a class="link" href="../users/{{ $ad->user_id }}">{{ $ad->user->name }}</a>
                                    </small>
                                </p>
                                <ul>
                                    <li>
                                        <a class="link" href="../ads/{{$ad->id}}">15 comments</a>
                                    </li>
                                    <li>{{ $ad->price }}eur</li>
                                    <li> {{ $ad->city }}, {{ $ad->area }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="type">
                            {{ $ad->type }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection