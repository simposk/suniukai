@extends('layouts.app')
@include('layouts.nav')
@section('content')
    <div class="container ads-container">
        <div class="ads-show">
            <div class="ads-photos">
                <div class="slider">
                    <div class="image">
                        <img src="http://kentworkingspanielclub.com/wp-content/uploads/2016/12/DSC_1945.jpg">
                        <img src="http://www.dogbreedslist.info/uploads/allimg/dog-pictures/English-Springer-Spaniel-2.jpg">
                        <img src="https://www.pets4homes.co.uk/images/breeds/16/large/9c624412e5a76a5fd8663aa426cd7261.jpg">
                        <img src="http://cdn3-www.dogtime.com/assets/uploads/gallery/cocker-spaniel-dogs-and-puppies/cocker-spaniel-dogs-puppies-10.jpg">
                        <img src="https://i.pinimg.com/736x/01/f4/15/01f41509c82b3f980c5aebc8f3f11bd2--spaniel-cocker-cockeri-spaniel.jpg">
                    </div>
                </div>
            </div>

            <div class="text">
                <h3 class="title">{{ $ad->title }}</h3>

                <div class="type">
                    {{ $ad->type }}
                </div>

                <small>{{ $ad->created_at->diffForHumans() }}</small>
                <p>{{ $ad->body }}</p>
                <i class="fas fa-user"></i> <a class="link" href="../users/{{$ad->user->id}}">{{ $ad->user->name }}</a> <br>
                <i class="fas fa-home"></i> {{ $ad->city }}, {{ $ad->area }}<br>    
                <i class="fas fa-phone"></i> {{ $ad->phone_number }} <br>
                <i class="fas fa-euro-sign"></i> {{ $ad->price }}<br>
                
                {{-- <p><i class="fas fa-envelope"></i> {{ $ad->email }}</p> --}}
            </div>
        </div>
        <div class="ads-contact">
            <div class="text">
                <h3>Send a Message</h3>
                <br>
                <form action="#">
                    {{ csrf_field() }}

                    <div class="form-group">    
                        <input type="text" class="form-control" placeholder="Your email">
                    </div>
                    
                    <div class="form-group">    
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>

                    <div class="form-group">    
                        <textarea class="form-control" id="text" name="body">Your Message</textarea>
                    </div>
                </form>
            </div>
        </div>
        <br>
         <small class="back">
            <a class="link" href="../ads">Back</a>
        </small>
    </div>
@endsection