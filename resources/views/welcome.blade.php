@extends('Layouts.app')

@section('content')
    <div class="container">
        <div class="justify-content-center">
            <form action="/skaiciuok" method="POST">
                @csrf
                <input type="text" name="weight">
                <input type="text" name="height">
                <button class="" type="submit">Skaičiuoti</button>
            </form>
        </div>
    </div>
@endsection
