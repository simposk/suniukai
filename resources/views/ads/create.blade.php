@extends('layouts.app')
@section('content')
@include('layouts.nav')

<div class="container">
    <h2 style="text-align: center">Create an Ad:</h2>

    <form action="/ads" method="POST" class="create-ad">
        {{ csrf_field() }}
        
        <div class="form-group">
            <select name="type" id="type" class="form-control" style="max-width: 92% !important; min-width: 92% !important">
                <option>Choose option</option>
                <option value="seeking">Seeking</option>
                <option value="offering">Offering</option>
            </select>
        </div>

        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="form-group">
            <textarea name="body" id="body" class="form-control">Body</textarea>
        </div>

        <div class="form-group">
            <input type="number" name="price" class="form-control" placeholder="Price">
        </div>

        <div class="form-group">
            <input type="text" name="phone_number" class="form-control" placeholder="Phone number">
        </div>

        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
            <input type="text" name="city" class="form-control" placeholder="City">
        </div>

        <div class="form-group">
            <input type="text" name="area" class="form-control" placeholder="Area">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Kurti</button>
        </div>
    </form>

    <small class="back">
        <a class="link" href="../home">Back</a>
    </small>
</div>

@endsection
