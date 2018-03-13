@extends('layouts.app')

@section('content')
    <div class="container ads-container">
        <div class="search">
            <input type="text" placeholder="Search">
            <button type="submit">Go</button>
        </div>
        
        <h2>All ads:</h2>
        <small><em>Showing {{ count($ads) }} results</em></small>    

        <div class="ads">
            @foreach($ads as $ad)
                <div class="ad">
                    <div class="content clearfix">                    
                        <div class="ad-thumb">
                            <img src="http://via.placeholder.com/250x250">    
                        </div>
                        
                        <div class="text">
                            <div class="title">
                            <a href="../ads/{{ $ad->id }}">
                                <h5 class="title">{{ $ad->title }}</h5>
                            </a>
                            <div class="type">
                                {{ $ad->type }}
                            </div>
                        </div>

                        <div class="body">
                            <p>{{ substr($ad->body, 0, 150) }}... <br></p>

                            <p><small>{{ $ad->created_at->diffForHumans() }}</small></p>
                            <ul>
                                <li>15 comments</li>
                                <li>{{ $ad->price }}eur</li>
                                <li> {{ $ad->city }}, {{ $ad->area }}</li>
                            </ul>
                            </em>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection