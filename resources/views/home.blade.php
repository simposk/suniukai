@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Message</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    Your ads:
                </div>
                
                <div class="card-body">
                    <p>You have {{ count(auth()->user()->ads) }} ads</p>
                    <a href="../user/ads">
                        <button class="btn btn-primary">Show Ads</button>
                    </a>

                    <a href="../ads/create">
                        <button class="btn btn-primary">Create an ad</button>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
