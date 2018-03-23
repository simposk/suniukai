@extends('layouts.app')

@section('content')
<div class="container">
    <div class="home">
        <div class="card">
            <div class="card-header">
                <span>Dashboard</span>
            </div>
            <div class="card-body">
                <span class="info">You have {{ count(auth()->user()->ads) }} ads:</span>
                <a class="link" href="../user/ads">Show Ads</a> /
                <a class="link" href="../ads/create">New Ad</a>
                <a class="link" href="../users/{{ auth()->user()->id }}" style="float:right">My Profile</a>
            </div>
        </div>
    </div>
</div>
@endsection
