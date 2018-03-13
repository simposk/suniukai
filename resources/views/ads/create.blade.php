@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Kurti skelbimą:</h3>
    <form action="/ads" method="POST">
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="type">Paslaugos tipas:</label>
            <select name="type" id="type" class="form-control">
                <option>Pasirinkite</option>
                <option value="ieškau">Ieškau</option>
                <option value="siulau">Siūlau</option>
            </select>
        </div>

        <div class="form-group">
            <label for="title">Pavadinimas:</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="body">Tekstas:</label>
            <textarea name="body" id="body" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Valandinė kaina:</label>
            <input type="text" name="price" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone_number">Telefono numeris:</label>
            <input type="text" name="phone_number" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">El. pašto adresas:</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="city">Miestas:</label>
            <input type="text" name="city" class="form-control">
        </div>

        <div class="form-group">
            <label for="area">Mikrorajonas:</label>
            <input type="text" name="area" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Kurti</button>
        </div>
    </form>

    <small>
        <a href="../home">Atgal</a>
    </small>
</div>

@endsection
